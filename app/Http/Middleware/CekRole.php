<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$id_role)
    {
        $user = $request->user();
        if ($user && in_array($user->id_role, $id_role)) {
            return $next($request);
        }
        
        return redirect()->back();
    }
}
