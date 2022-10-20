<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RequestExemple
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
        if ($request->input('name') !== 'hicham') {
            return redirect('request')->with("session",'Name is not correct');
        }
        return $next($request);
    }
}
