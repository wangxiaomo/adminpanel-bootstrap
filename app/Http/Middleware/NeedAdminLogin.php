<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\AdminUser;

class NeedAdminLogin
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
        $admin_uid = session('admin_uid');
        if($admin_uid) {
            $request->admin_user = AdminUser::get($admin_uid);
            return $next($request);
        }
        return redirect('/login');
    }
}
