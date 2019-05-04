<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods_descriptions extends Model
{
	protected $table = "goods_descriptions";
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'goods_category_id', 'descriptions',
	];
}
