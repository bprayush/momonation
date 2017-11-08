<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class Admin 
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

        if( !Auth::user()->admin )
        {
            Session::flash('info','You do not have enough permissions to view this page');
            return redirect()->route('homepage');
        }

        return $next($request);
    }
}
