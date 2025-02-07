<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventRegistration
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->is('register') || $request->is('register/*')) {
            abort(404);
        }

        return $next($request);
    }
}
