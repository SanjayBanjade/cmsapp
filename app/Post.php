<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'title',
		'description'
	];

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function photo() {
    	return $this->belongsTo('App\Photo');
    }
}
