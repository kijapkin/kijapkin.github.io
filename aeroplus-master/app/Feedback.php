<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
	protected $table = "feedback";
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'phone',
	];
}