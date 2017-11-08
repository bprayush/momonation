<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appreciation extends Model
{
    //
	protected $fillable = [
		'user_id',
		'apprc_user_id',
		'name'
	];

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
}
