<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;

class Approved
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if( !Auth::user()->approved )
        {
            Session::flash('info', 'Your account has to be approved by administrator.');
            return redirect()->route('homepage');
        }

        return $next($request);
    }
}
