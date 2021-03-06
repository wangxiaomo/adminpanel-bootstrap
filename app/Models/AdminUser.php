<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminUser extends Model {

    use SoftDeletes;

    const SUPER_ADMIN = 0;

    protected $fillable = ['name', 'email', 'password', 'admin_type'];
    protected $dates = ['deleted_at'];

    public static function login($email, $password) {
        $u = AdminUser::where(['email' => $email, 'password' => md5($password)])->first();
        return $u;
    }

    public function role() {
        switch($this->admin_type) {
            case AdminUser::SUPER_ADMIN: return '超级管理员';
        }
    }

    public static function check_user_data($name, $email, $id=null) {
        $u = AdminUser::where('name', $name)->first();
        if($u && $u->id != $id) return '用户名已被占用!';
        $u = AdminUser::where('email', $email)->first();
        if($u && $u->id != $id) return 'Email已被占用!';
    }

    public static function add($data) {
        $u = AdminUser::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => md5($data['password']),
            'admin_type' => $data['admin_type']
        ]);
        return $u;
    }

    public function update_password($old, $new) {
        if($this->password == md5($old)){
            $this->password = md5($new);
            $this->save();
            return '修改成功';
        }else{
            return '修改失败，请重新尝试';
        }
    }
}
