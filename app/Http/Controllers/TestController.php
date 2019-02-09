<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        return view('admin.test');
    }

    public function verify(Request $request)
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

        $headers = ['Authorization: Key test_secret_key_d4ba39de2d074b54ae2d024506979011'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		// Response
        $response    = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }
}
