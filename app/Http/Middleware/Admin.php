<?php


namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next) {

        abort_if(! $request->user() || (! $request->user()->isAdmin()), 403);
        return $next($request);
    }
}
