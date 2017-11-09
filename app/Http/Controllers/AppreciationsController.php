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

        if( $users->count() <= 1 )
        {
            Session::flash('info', 'You need more than one people to appreciate.');
            return redirect(route('app.index'));
        }

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
            'appreciated_user' => 'required'
        ]);

        $plate = '';

        if( $request->raw == 5 )
        {
            $plate = "Half Plate MoMo";
        }
        else if( $request->raw == 10 )
        {
            $plate = "One Plate MoMo";
        }
        else if( $request->raw == 20 )
        {
            $plate = "Two Plate MoMo";
        }

        $appreciation = Appreciation::create([
            'appreciating_user' => Auth::id(),
            'appreciated_user' => $request->appreciated_user,
            'name' => $request->name,
            'plates' => $plate
        ]);

        $user = Auth::user();
        $user->momobank->raw = $user->momobank->raw - $request->raw;
        $user->momobank->save();

        $apUser = User::find( $request->appreciated_user );
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
