<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminUser;
use App\Http\Controllers\Controller;

class LoginController extends Controller {

    public function login() {
        if(request()->isMethod('post')){
            $email = request('email');
            $password = request('password');
            $vcode = request('vcode');

            if(\Captcha::check($vcode)){
                $user = AdminUser::login($email, $password);
                if($user) {
                    session(['admin_uid' => $user->id]);
                    return redirect('/admin');
                }
                return redirect()->route('admin.login')->with('msg', '账号或密码错误');
            }else{
                return redirect()->route('admin.login')->with('msg', '验证码错误');
            }
        }else{
            return view('admin.login');
        }
    }
}
