<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Developer
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 0) {
            return redirect()->route('my-dashboard');
        }

        if (Auth::user()->role == 2) {
            return $next($request);
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('home');
        }
    }
}
