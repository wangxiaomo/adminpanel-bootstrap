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

    public static function get_all() {
        $users = AdminUser::all();
        return $users;
    }

    public function role() {
        switch($this->admin_type) {
            case AdminUser::SUPER_ADMIN: return '超级管理员';
            case AdminUser::SUPERVISOR:  return '审核人员';
            case AdminUser::WORKER:      return '操作员';
        }
    }
}
