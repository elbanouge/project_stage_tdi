<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\User;

class Admin
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->guest('/login');
        }
        $user = User::where("id", $request->user()->id)->first();

        if ($user->hasRole(['admin', 'super-admin'])) {
            return $next($request);
        } else {
            abort(403, 'Unauthorized action.');
        }
    }
}
