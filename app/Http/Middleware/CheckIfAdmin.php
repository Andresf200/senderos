<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIfAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if($request->user() != null && $request->user()->isAdmin()){
            return $next($request);
        }
        abort(403);
    }
}
