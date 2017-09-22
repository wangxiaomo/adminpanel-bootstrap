<?php

namespace App\Http\Middleware;

use Closure;
use App\Guards\AdminGuard;

class NeedSuperAdmin
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
        if(AdminGuard::is_superadmin($request->admin_user)){
            return $next($request);
        }
        abort(403);
    }
}
