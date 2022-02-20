<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('loginId') && (url('login') == $request->url() || url('register') == $request->url())) {
            return redirect('/dashboard')->with('error', 'You are already logged in!, Click LogOut to Exit Session');
        }
        return $next($request);
    }
}
