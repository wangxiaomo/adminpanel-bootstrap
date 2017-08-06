<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminUser extends Model {

    use SoftDeletes;

    const SUPER_ADMIN = 0;
    const SUPERVISOR  = 1;
    const WORKER = 2;

    protected $fillable = ['name', 'email', 'password', 'admin_type'];
    protected $dates = ['deleted_at'];

    public static function login($email, $password) {
        $u = AdminUser::where(['email' => $email, 'password' => md5($password)])->first();
        return $u;
    }

    public static function get($id) {
        $u = AdminUser::find($id);
        return $u;
    }
}
