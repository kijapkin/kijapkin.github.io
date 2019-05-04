<?php

namespace App\Http\Controllers\Front;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutusController extends Controller
{
    public function main(Request $request)
    {
    	$About_us = DB::table('about_us')->get();
    	return view('about_us.main', compact('About_us'));
    }
}
