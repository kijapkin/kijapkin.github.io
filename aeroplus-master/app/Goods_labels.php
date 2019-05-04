<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods_labels extends Model
{
	protected $table = "goods_labels";
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'goods_category_id', 'label',
	];
}