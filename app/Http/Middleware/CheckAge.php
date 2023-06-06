<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response; // Fixed the namespace import

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next): Response // Added the missing opening brace
    {
        if ($request->check <= 20) {
            return redirect('about');
        }
        return $next($request);
    }
}
