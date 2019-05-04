<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods_item_labels extends Model
{
	protected $table = "goods_item_labels";
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'goods_labels_id', 'goods_items_id', 'content'
	];
}