<?php


namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckOffer
{
    public function handle($request, Closure $next) {
        $users = $request->route()->parameter('user_id');

        if (Auth::user()->role == 'ADMIN' || Auth::user()->id == $users['user_id']) {
            return $next($request);
        }
        return redirect()->back();
    }
}
