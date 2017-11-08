<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appreciation extends Model
{
    //
	protected $fillable = [
		'appreciated_user',
		'appreciating_user',
		'name',
		'plates'
	];

    public function appreciatingUser()
    {
    	return $this->belongsTo('App\User', 'appreciating_user', 'id');
    }

    public function appreciatedUser()
    {
    	return $this->belongsTo('App\User', 'appreciated_user', 'id');
    }
}
