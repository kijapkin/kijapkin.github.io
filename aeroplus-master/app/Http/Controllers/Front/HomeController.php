<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Goods_items;
use App\Our_customers;
use App\Gallery_category;
use App\Gallery_images;
use App\News;

use Mail;
use CRUDBooster;

class HomeController extends Controller{
	
    public function main(Request $request){
    	$Goods_items = null;
    	$Our_customers = null;
    	$Gallery_category = null;
    	$Gallery_images = null;

    	$Goods_items = Goods_items::select('goods_items.*', 'goods_category.slug')
            ->orderBy('id', 'desc')
            ->join('goods_category', 'goods_category.id', '=', 'goods_items.goods_category_id')
            ->take(8)
            ->get();
    	$Our_customers = Our_customers::get();
    	$Gallery_category = Gallery_category::orderBy('id', 'asc')->first();
    	if(!is_null($Gallery_category))
    		$Gallery_images = Gallery_images::where('gallery_category_id', $Gallery_category->id)->get();
    	$News = News::take(6)->get();
    	return view('main', compact("Goods_items", "Our_customers", "Gallery_category", "Gallery_images", "News"));
    }
    
    public function mail(Request $request){
		$data = [
			'name'	=>	CRUDBooster::getSetting('appname'),
			'email'	=>	CRUDBooster::getSetting('email_sender')
		];
		
		CRUDBooster::sendEmail([
			'to'		=>	'mirasoft182@gmail.com',
			'data'		=>	$data,
			'template'	=>	'order'
		]);
	}
}
