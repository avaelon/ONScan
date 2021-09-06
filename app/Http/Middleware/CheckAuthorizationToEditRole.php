<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;

class CheckAuthorizationToEditRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)

    {
        $role = $request->route('role');
        if ($role) {
            if (auth()->user()->team_id == $role->team_id && !in_array($role->name, ['Super Admin', 'High Street Admin', 'Corporate Admin', 'Unit Admin'])) {
                return $next($request);
            }
            abort(403);
        } else {
            return $next($request);
        }
    }
}
