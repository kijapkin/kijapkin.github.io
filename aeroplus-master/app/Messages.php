<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
	protected $table = "messages";
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'message',
	];
}
