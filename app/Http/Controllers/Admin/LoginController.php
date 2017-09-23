<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminUser;
use App\Http\Controllers\Controller;

class LoginController extends Controller {

    public function index() {
        return view('admin.login');
    }

    public function login() {
        $email = request('email');
        $password = request('password');
        $vcode = request('vcode');
        $admin_type = request('hack_type', AdminUser::SUPER_ADMIN);

        if(\Captcha::check($vcode)){
            $user = AdminUser::login($email, $password);
            if($user) {
                session(['admin_uid' => $user->id]);
                return redirect('/admin');
            }
            return redirect('/admin/login')->with('msg', '账号或密码错误');
        }else{
            return redirect('/admin/login')->with('msg', '验证码错误');
        }
    }
}
