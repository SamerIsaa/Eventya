<?php

namespace App\Http\Middleware;

use Closure;

class SupplierAuthMiddleware
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
        if (auth()->guard('supplier')->check() && auth()->guard('supplier')->user()->is_aproved){

            return $next($request);
        }

        return redirect()->back();
    }
}
