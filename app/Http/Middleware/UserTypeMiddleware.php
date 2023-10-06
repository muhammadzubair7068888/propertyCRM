<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserTypeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, ...$allowedUserTypes)
    {
        // $user = $request->user();
    
        // if (!$user || !in_array($user->user_type, $allowedUserTypes)) {
        //     // Redirect or deny access based on your requirements
        //     return redirect()->route('login'); // Replace '/home' with the desired URL or response
        // }
        // else{
        //     return redirect()->route('home');
        // }
    
        return $next($request);
    }
}
