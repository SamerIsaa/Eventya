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
        if ($request->get('locale') == 'en' or $request->get('locale') == 'ar') {
            app()->setLocale($request->get('locale'));
            session()->put('locale', $request->get('locale'));
        }
        elseif (session('locale')){
            app()->setLocale(session('locale'));
        }else{
            app()->setLocale('ar');
        }

        return $next($request);
    }
}