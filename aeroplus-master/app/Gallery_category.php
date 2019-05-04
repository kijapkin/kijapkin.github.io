<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gallery_images;

class Gallery_category extends Model
{
	protected $table = "gallery_category";
	protected $__image = false;
	protected $__images = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'slug', 'title',
	];

	public function getImage()
	{
		if($this->__image === false)
			$this->__image = Gallery_images::where('gallery_category_id', $this->id)->first();
		return $this->__image;
	}

	public function getImages()
	{
		if($this->__images === false)
			$this->__images = Gallery_images::where('gallery_category_id', $this->id)->get();
		return $this->__images;
	}
}