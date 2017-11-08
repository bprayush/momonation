<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Momobank extends Model
{
    //
    
    protected $fillable = [
    	'user_id', 'raw', 'cooked'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
