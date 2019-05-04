<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
	public function main(Request $request)
	{
		$News = News::orderBy('id', 'desc')->paginate(6);
		return view('news.main', compact("News"));
	}

	public function artikle(Request $request)
	{
		$News = News::where('slug', $request->route('slug'))->first();
		if(is_null($News))
			return abort(404);
		return view('news.artikle', compact("News"));
	}
}
