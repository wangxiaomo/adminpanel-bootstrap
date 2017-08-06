<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;

class LoginController extends Controller {

    public function index() {
        return view('login');
    }

    public function login() {
        $email = request('email');
        $password = request('password');
        $admin_type = request('hack_type', AdminUser::SUPER_ADMIN);

        $user = AdminUser::login($email, $password);
        if($user) {
            session(['admin_uid' => $user->id]);
            return redirect('/admin');
        }
        return redirect('/login')->with('msg', '账号或密码错误');
    }
}
