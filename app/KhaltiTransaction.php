<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhaltiTransaction extends Model
{
    protected $fillable = ['user_id', 'mobile', 'amount', 'khalti_payment_idx', 'verified_token', 'type', 'status', 'number_of_momos', 'fee_deducted', 'error_detail'];
}
