<?php namespace App\Helpers;

use App\Gallery_category;
use App\Goods_category;


class Menu {
	public static function gallery_list() {
		return Gallery_category::get();
	}

	public static function goods_list() {
		return Goods_category::get();
	}
}