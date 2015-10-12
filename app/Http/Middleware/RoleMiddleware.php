<?php

namespace Cardano\Http\Middleware;

use Closure;
use Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
      if($user = Auth::user()) {
        if($role == 'master' && !$user->is_admin) {
          return response('Unauthorized.', 401);
        }
        if ($role == 'customer' && $user->is_admin) {
          return response('Unauthorized.', 401);
        }
        return $next($request);
      }      
      return response('Unauthorized.', 401);
    }
}
