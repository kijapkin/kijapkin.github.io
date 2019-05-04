<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Our_customers extends Model
{
	protected $table = "our_customers";
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'image',
	];
}