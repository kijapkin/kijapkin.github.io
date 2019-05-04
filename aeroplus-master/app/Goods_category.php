<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Goods_items;

class Goods_category extends Model
{
	protected $table = "goods_category";
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'slug', 'title',
	];

	public function getItems($limit = 12)
	{
		return Goods_items::where('goods_category_id', $this->id)->take(12)->orderby('price', 'asc')->get();
	}
}
