<?php

namespace App\Http\Middleware;

use Closure;

class UserAuthMiddleware
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

        if (auth()->guard('supplier')->check() or auth()->guard('payer')->check() ){

            return $next($request);
        }

        return redirect()->back();
    }
}
