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
        return view('app.store')->with('user', $user);
    }

    function checkout(){
        return view('app.checkout');
    }
}
