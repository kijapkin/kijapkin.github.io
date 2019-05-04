<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use Illuminate\Support\Facades\Input;
use App\Goods_category;
use App\Goods_items;
use App\Orders;
use CRUDBooster;

class GoodsController extends Controller
{
	public function main(Request $request)
	{
		$min = 0;
		$max = 2000000;
		$price_min = Goods_items::orderBy('price', 'asc')->first();
		if($price_min) {
			$min = round($price_min->price);
		}
		$price_max = Goods_items::orderBy('price', 'desc')->first();
		if($price_min) {
			$max = round($price_max->price);
		}
		$Parent = null;
		$Goods_category = Goods_category::get();
		$Producer = DB::table('producer')->get();
		$Type = DB::table('type')->get();
		$Type_installation = DB::table('type_installation')->get();
		return view('goods.main', compact("Goods_category", "Producer", "Type", "Type_installation", "Parent", "min", "max"));
	}

	public function category(Request $request)
	{
		$Parent = Goods_category::where('slug', $request->route('slug'))->first();
		if(!$Parent)
			return abort(404);
		$min = 0;
		$max = 2000000;
		$price_min = Goods_items::orderBy('price', 'asc')->first();
		if($price_min) {
			$min = round($price_min->price);
		}
		$price_max = Goods_items::orderBy('price', 'desc')->first();
		if($price_min) {
			$max = round($price_max->price);
		}
		$Goods_category = Goods_category::get();
		$Producer = DB::table('producer')->get();
		$Type = DB::table('type')->get();
		$Type_installation = DB::table('type_installation')->get();
		return view('goods.main', compact("Goods_category", "Producer", "Type", "Type_installation", "Parent", "min", "max"));
	}

	public function item(Request $request)
	{
		$Parent = Goods_category::where('slug', $request->route('slug'))->first();
		if(!$Parent)
			return abort(404);
		$Goods_items = Goods_items::where('id', $request->route('item'))->where('goods_category_id', $Parent->id)->first();
		if(!$Goods_items)
			return abort(404);
		return view('goods.item', compact("Parent", "Goods_items"));
	}

	public function order(Request $request)
	{	
		$validator = Validator::make($request->all(), [
			'id' => 'required',
            'user' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|max:255'
        ]);
        if($validator->fails())
        	return json_encode($validator);
        $Orders = new Orders();
        $Orders->goods_items_id = $request->input('id');
        $Orders->name = $request->input('user');
        $Orders->phone = $request->input('phone');
        $Orders->email = $request->input('email');
        $Orders->status = 'created';
        $Orders->save();
        $item = Goods_items::where('id', $request->input('id'))->first();
        CRUDBooster::sendEmail([
        	'to' => CRUDBooster::getSetting('email_sender'), 
        	'data' => [
        		'name' => $item->title,
        		'artikle' => $item->artikle,
        		'user' => $request->input('user'),
        		'phone' => $request->input('phone'),
        		'email' => $request->input('email'),
        		'price' => $item->price,
        		'latest_price' => $item->latest_price
        	],
        	'template' => 'order'
        ]);
        return json_encode(['type' => 'success', 'message' => 'Ваш запит відправлено менеджеру. Очікуйте дзвінок.']);
	}

	public function search(Request $request)
	{
		//' . $request->input('title') . '
		$json = [];
		$items = Goods_items::select('goods_items.*', 'gc.id as gc_id', 'gc.title as gc_title', 'gc.slug as gc_slug')
			->where('goods_items.title', 'like', '%' . $request->input('term') . '%')
			->rightjoin('goods_category as gc', 'goods_items.goods_category_id', '=', 'gc.id')
			->get();

		foreach ($items as $item) {
			$json[] = [
				'id' => $item->id,
				'price' => $item->price . ' грн.',
				'name' => $item->title,
				'image' => is_null($item->getimage()) ? '/images/no-image-available-grid.jpg' : '/'.$item->getimage()->image,
				'url' => '/goods/' . $item->gc_slug . '/' . $item->id
			];
		}
		return json_encode($json);
	}

	public function filter(Request $request) {
		$json = [];
		$Items = Goods_items::select('goods_items.*', 'gc.id as gc_id', 'gc.title as gc_title', 'gc.slug as gc_slug')
			->rightjoin('goods_category as gc', 'goods_items.goods_category_id', '=', 'gc.id');
		// Минимальная сумма
		$Items->where('price', '>=', str_replace(' ', '', Input::get('min')));
		// Максимальная сумма
		$Items->where('price', '<=', str_replace(' ', '', Input::get('max')));
		// Производитель
		switch (Input::get('sort')) {
			case 'money_max':
				$Items = $Items->orderBy('price', 'desc');
				break;
			case 'date_created':
				$Items = $Items->orderBy('created_at', 'desc');
				break;
			case 'sales':
				#$Items = $Items->orderBy('latest_price', 'desc');
				$Items->where('latest_price', '>', 0);
				break;
			case 'money_min':
				$Items = $Items->orderBy('price', 'ASC');
				break;
		}
		if(Input::get('producer'))
			$Items->whereIn('producer_id', Input::get('producer'));
		if(Input::get('type'))
			$Items->whereIn('type_id', Input::get('type'));
		if(Input::get('type_installation'))
			$Items->whereIn('type_installation_id', Input::get('type_installation'));
		$Items = $Items->take(12);
		if(Input::get('offset'))
			$Items->offset(Input::get('offset'));
		$items = $Items->get();
		foreach ($items as $item) {
			$json[] = [
				'article' => $item->artikle,
				'image' => is_null($item->getimage()) ? '/images/no-image-available-grid.jpg' : '/'.$item->getimage()->image,
				'name' => $item->title,
				'price' => $item->price,
				'sale' => $item->latest_price,
				'url' => '/goods/' . $item->gc_slug . '/' . $item->id
			];
		}
		return response()->json($json);
	}

	public function favoritesave(Request $request) {
		$ids = explode(',', $request->session()->get('favorite', ''));
		$id = array();
		foreach ($ids as $key => $value) {
			if($value != "")
				array_push($id, intval($value));
		}
		if($request->input('id'))
		{
			if(in_array($request->input('id'), $id))
			{
				if (($key = array_search($request->input('id'), $id)) !== false) {
					unset($id[$key]);
				}
			} else {
				$id[] = intval($request->input('id'));
			}
			$request->session()->put('favorite', implode(',', $id));
			return response()->json($id);
		}
		return response()->json($id);
	}

	public function favorite_listPOST(Request $request) {
		$ids = explode(',', $request->session()->get('favorite', ''));
		$id = array();
		foreach ($ids as $key => $value) {
			if($value != "")
				array_push($id, intval($value));
		}

		if($request->input('id'))
		{
			if(in_array($request->input('id'), $id))
			{
				if (($key = array_search($request->input('id'), $id)) !== false) {
					unset($id[$key]);
				}
			} else {
				$id[] = intval($request->input('id'));
			}
			$request->session()->put('favorite', implode(',', $id));
		}
		return $this->favorite_list($request);
	}

	public function favorite_list(Request $request) {
		$id = $request->session()->get('favorite','') == '' ? [] : explode(',', $request->session()->get('favorite',''));
		foreach ($id as $key => $value) {
			$id[$key] = intval($value);
		}
		$data = [];
		$data['count'] = 0;
		$data['id'] = $id;
		foreach ($id as $key => $value) {
			$item = Goods_items::select('goods_items.*', 'gc.id as gc_id', 'gc.title as gc_title', 'gc.slug as gc_slug')
				->where('goods_items.id', '=', $value)
				->rightjoin('goods_category as gc', 'goods_items.goods_category_id', '=', 'gc.id')
				->first();
			if($item) {
				$item->image = is_null($item->getimage()) ? '/images/no-image-available-grid.jpg' : '/'.$item->getimage()->image;
				$data['list'][] = $item;
				$data['count']++;
			}
		}
		return response()->json($data);
	}

	public function favorite(Request $request) {
		$ids = explode(',', $request->session()->get('favorite', ''));
		$id = array();
		foreach ($ids as $key => $value) {
			if($value != "")
				array_push($id, intval($value));
		}

		$Goods_items = Goods_items::select('goods_items.*', 'goods_category.slug')
			->whereIn('goods_items.id', $id)
            ->join('goods_category', 'goods_category.id', '=', 'goods_items.goods_category_id')
            ->get();
        return view('goods.favorite', compact("Goods_items"));
	}
}
