<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery_category;

class GalleryController extends Controller
{
	public function main(Request $request)
	{
		$Gallery_category = Gallery_category::get();
		return view('gallery.main', compact("Gallery_category"));
	}

	public function pictures(Request $request)
	{
		$Gallery_category = Gallery_category::where('slug', $request->route('slug'))->first();
		if(is_null($Gallery_category))
			return abort(404);
		return view('gallery.pictures', compact("Gallery_category"));
	}
}
