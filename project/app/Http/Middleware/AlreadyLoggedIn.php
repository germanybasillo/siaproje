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
        // Check if user is already logged in and tries to access login or register page
        if ($request->session()->has('loginID') && ($request->is('ml') || $request->is('register'))) {
            // Redirect back if user is already logged in and tries to access login or register page
            return redirect()->back();
        }

        // Allow the request to proceed to the next middleware
        return $next($request);
    }
}
