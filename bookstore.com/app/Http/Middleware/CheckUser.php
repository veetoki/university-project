<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Order;

class CheckUser
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
        if ($request->user()->id != $request->id && $request->routeIs('frontend.user.home.orderHistory')){
            return redirect()->back();
        }elseif ($request->routeIs('frontend.user.home.orderDetail')) {
            $orderIds= Order::where('user_id', $request->user()->id)->pluck('id');
            if (!$orderIds->contains($request->id)) {
                return redirect()->back();
            }
        }
        return $next($request);
    }
}
