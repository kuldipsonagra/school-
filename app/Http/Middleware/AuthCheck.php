<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('loginid')) {
            return redirect()->route('login')->with('fail', 'You have to login first.');
        }
        
        $loginid = session()->get('loginid');
        if(isset($loginid['id'])){
            // code to be executed when 'id' key exists in the 'loginid' array
        } else {
            // code to be executed when 'id' key does not exist in the 'loginid' array
        }
        
        return $next($request);
    }
    
}
