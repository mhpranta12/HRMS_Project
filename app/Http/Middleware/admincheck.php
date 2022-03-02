<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class admincheck
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
        if ($request->session()->get('user_name') == 'admin') 
        {
            return $next($request);
        }
         else 
        {
            $request->session()->flash('msg', 'Invalid Request');
            return redirect("/login");  
        }
        return $next($request);
    }
}
