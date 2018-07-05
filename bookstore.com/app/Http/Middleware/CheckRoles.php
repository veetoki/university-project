<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role = null)
    {
        //Check admin
        if (!Auth::check() || Auth::user()->hasRole($role)) {
            return $next($request);
        }
        return redirect()->route('frontend.home.index');
    }
}
