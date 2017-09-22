<?php

namespace App\Guards;

use App\Models\AdminUser;

class AdminGuard {
    public static function is_superadmin(AdminUser $u){
        return $u->admin_type == AdminUser::SUPER_ADMIN;
    }
}
