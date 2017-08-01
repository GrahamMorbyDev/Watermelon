<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Members
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
        if ( Auth::check() && (Auth::user()->isMember() || Auth::user()->isAdmin()) )
        {
            return $next($request);
        }

        return redirect('')->with('alert-danger', 'You need an active subscription to view that content');
    }
}
