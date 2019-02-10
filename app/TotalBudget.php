<?php

namespace App;

use App\KhaltiTransaction;
use Illuminate\Database\Eloquent\Model;

class TotalBudget extends Model
{
    protected $fillable = ['transaction_id', 'amount'];

    public function transaction(){
    	return $this->hasOne(KhaltiTransaction::class, 'transaction_id');
    }

}
