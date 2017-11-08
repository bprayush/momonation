<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Appreciation;
use Session;

class AppreciationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('approved', 1)->where('admin', 0)->orderBy('name', 'asc')->get();
        $user = User::find(Auth::id());

        return view('app.appreciation', compact('users', 'user'));
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
        $this->validate($request, [
            'name' => 'required',
            'raw' => 'required',
            'apprc_user_id' => 'required'
        ]);

        $appreciation = Appreciation::create([
            'user_id' => Auth::id(),
            'apprc_user_id' => $request->apprc_user_id,
            'name' => $request->name
        ]);

        $user = Auth::user();
        $user->momobank->raw = $user->momobank->raw - $request->raw;
        $user->momobank->save();

        $apUser = User::find( $request->apprc_user_id );
        $apUser->momobank->cooked = $apUser->momobank->cooked + $request->raw;
        $apUser->momobank->save();

        Session::flash('success', 'Appreciated successfully.');

        return redirect(route('app.index'));
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
    }
}