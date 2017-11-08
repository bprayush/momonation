<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Profile;
use App\Appreciation;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('approved')->except('logout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( Auth::user()->admin )
        { 
            $registered = User::where('approved', 1)->get()->count() - 1;
            $needApprove = User::where('approved', 0)->get()->count();

            return view('admin.index', compact('registered', 'needApprove'));
        }
        else
        {
            $user = Auth::user();
            $users = User::class;
            $apprc = Appreciation::orderBy('created_at', 'desc')->take(5)->get();
            $appreciations = [];
            foreach($apprc as $a )
            {
                $temp = "<b>".$a->created_at->toFormattedDateString()."</b>: ".$users::find($a->user_id)->name . " appreciated " . $users::find($a->apprc_user_id)->name;
                array_push($appreciations, $temp);
            }

            return view('app.index', compact('user', 'appreciations'));
        }
    }
}
