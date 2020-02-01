<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch($guard){
            case 'trainer':
                if(Auth::guard($guard)->check()){
                    return redirect('/trainers');
                }
                break;

            case 'customer':
                if(Auth::guard($guard)->check()){
                    return redirect('/customers');
                }
                break;

            case 'gym':
                if(Auth::guard($guard)->check()){
                    return redirect('/gyms');
                }
                break;

            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                break;
        }

        return $next($request);
    }
}
