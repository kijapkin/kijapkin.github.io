<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods_item_descriptions extends Model
{
	protected $table = "goods_item_descriptions";
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'goods_descriptions_id', 'goods_items_id', 'content', 
	];
}
