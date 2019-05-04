<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Goods_item_images;
use App\Goods_item_labels;
use App\Goods_item_descriptions;
class Goods_items extends Model
{
	protected $table = "goods_items";
	protected $__image = false;
	protected $__images = false;
	protected $__labels = false;
	protected $__description = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'goods_category_id', 'title', 'artikle', 'price', 'video', 'latest_price',
	];

	public function getimage()
	{
		if($this->__image === false)
			$this->__image = Goods_item_images::where('goods_items_id', $this->id)->first();
		return $this->__image;
	}

	public function getimages()
	{
		if($this->__images === false)
			$this->__images = Goods_item_images::where('goods_items_id', $this->id)->get();
		return $this->__images;
	}

	public function getLabels()
	{
		if($this->__labels === false)
			$this->__labels = Goods_item_labels::where('goods_items_id', $this->id)->join('goods_labels', 'goods_item_labels.goods_labels_id', '=', 'goods_labels.id')->get();
		return $this->__labels;
	}

	public function getDescription()
	{
		if($this->__description == false)
			$this->__description = Goods_item_descriptions::where('goods_items_id', $this->id)
		->join('goods_descriptions', 'goods_item_descriptions.goods_descriptions_id', '=', 'goods_descriptions.id')->get();
		return $this->__description;
	}
}