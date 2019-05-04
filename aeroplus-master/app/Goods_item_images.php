<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods_item_images extends Model
{
	protected $table = "goods_item_images";
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'goods_items_id', 'image',
	];
}