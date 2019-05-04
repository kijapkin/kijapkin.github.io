<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery_images extends Model
{
	protected $table = "gallery_images";
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'gallery_category_id', 'image', 'title',
	];
}
