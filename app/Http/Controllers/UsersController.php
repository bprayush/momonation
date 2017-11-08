<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use App\Profile;
use App\Momobank;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        //
        $users = User::where('approved', 1)->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->profile->delete();
        $user->momobank->delete();
        User::destroy($id);

        Session::flash('success', 'User deleted successfully.');
        return back();
    }

    public function disapprove($id)
    {
        User::destroy($id);

        Session::flash('success', 'User deleted successfully.');
        return back();
    }

    public function toApprove()
    {
        $users = User::where('approved', 0)->get();

        return view('admin.users.approve', compact('users'));
    }

    public function approve($id)
    {
        $user = User::find($id);
        $user->approved = 1;
        $user->save();
        Profile::create([
            'user_id' => $id,
            'avatar' => '/uploads/avatars/default.png'
        ]);

        Momobank::create([
            'raw' => 200,
            'cooked' => 0,
            'user_id' => $id
        ]);

        Session::flash('success', 'User approved successfully.');
        return back();
    }

    public function makeSupervisor($id)
    {
        $user = User::find($id);
        $user->supervisor = 1;
        $user->momobank->raw = $user->momobank->raw + 50;

        $user->save();
        $user->momobank->save();

        Session::flash('success', 'Successfully changed privilege.');
        return back();
    }

    public function revokeSupervisor($id)
    {
        $user = User::find($id);
        $user->supervisor = 0;
        $user->momobank->raw = $user->momobank->raw - 50;

        $user->save();
        $user->momobank->save();

        Session::flash('success', 'Successfully changed privilege.');
        return back();
    }

}
