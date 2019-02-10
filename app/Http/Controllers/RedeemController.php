<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RedeemController extends Controller
{
    function index(){
        $user = Auth::user();

        return view('app.redeem', compact('user'));
    }

    function redeem(){
        return "<h1>Coming Soon!</h1>";
    }

    function charity(){
        return "<h1>Coming Soon!</h1>";
    }
}
