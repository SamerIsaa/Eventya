<?php
namespace App\Http\Middleware;
use Closure;
class CheckLangMiddleware
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
//return request()->ajax();
        if ($request->get('locale') == 'en' or $request->get('locale') == 'ar') {
            app()->setLocale($request->get('locale'));
            session()->put('locale', $request->get('locale'));
        }
        else{
            app()->setLocale(session('locale'));
        }
//
//
////        if(session()->has('locale')) {
////            app()->setLocale(session()->get('locale'));
////        }z
        return $next($request);
    }
}