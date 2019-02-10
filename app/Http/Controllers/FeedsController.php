<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Appreciation;

class FeedsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $appreciations = Appreciation::orderBy('created_at', 'desc')->get();
        $user = auth()->user();
        return view('app.feed', compact('appreciations', 'user'));
    }
}
