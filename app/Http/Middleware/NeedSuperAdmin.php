<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\AdminUser;

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
        if($request->admin_user->admin_type == AdminUser::SUPER_ADMIN){
            return $next($request);
        }
        abort(403);
    }
}
