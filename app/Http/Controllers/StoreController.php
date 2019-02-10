<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $user = auth()->user();
        // return $user;
        // dd($user);
        return view('app.store')->with('user', $user);
    }

    function checkout(){
        $user = auth()->user();
        return view('app.checkout')->with('user', $user);
    }
}
