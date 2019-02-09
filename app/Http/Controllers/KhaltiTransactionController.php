<?php

namespace App\Http\Controllers;

use App\KhaltiTransaction;
use Illuminate\Http\Request;

class KhaltiTransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function verifyTransaction(Request $request)
    {
        // return $request->all();
        $args = http_build_query(array(
            'token'  => $request->payload['token'],
            'amount' => $request->payload['amount'],
        ));

        $url = "https://khalti.com/api/v2/payment/verify/";

        # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $headers = ['Authorization: Key ' . config('envKeys.khalti_keys.secret_key')];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Response
        $response    = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $response = json_decode($response, true);
        // dd($response);
        // return $response;
        $khalti = KhaltiTransaction::create([
            'user_id'            => auth()->user()->id,
            'mobile'             => $response['user']['mobile'],
            'amount'             => $response['amount'],
            'fee_deducted'       => $response['fee_amount'],
            'khalti_payment_idx' => $response['idx'],
            'verified_token'     => $request->payload['token'],
            'type'               => $response['type']['name'],
            'status'             => $response['state']['name'],
            'number_of_momos'    => $request->momos,

        ]);
        return $khalti;
    }
}
