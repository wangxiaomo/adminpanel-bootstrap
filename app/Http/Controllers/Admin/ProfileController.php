<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;

class ProfileController extends Controller {
    public function __construct() {
        $this->middleware('need_admin_login');
    }

    public function edit() {
        $admin_user = request()->admin_user;
        if(request()->isMethod('post')){
            $data = request()->all();
            $admin_user->name = $data['name'];
            $admin_user->email = $data['email'];
            $is_unvalid = AdminUser::check_user_data(
                $admin_user->name, $admin_user->email, $admin_user->id
            );
            if($is_unvalid) {
                return view('admin.profile.edit', ['user'=>$admin_user, 'msg'=>$is_unvalid]);
            }else{
                $admin_user->save();
                return view('admin.profile.edit', ['user'=>$admin_user, 'msg' => '修改成功']);
            }
        }
        return view('admin.profile.edit', ['user' => $admin_user]);
    }

    public function password() {
        $admin_user = request()->admin_user;
        if(request()->isMethod('post')){
            $data = request()->all();
            $r = $admin_user->update_password($data['old_password'], $data['password']);
            return view('admin.profile.password', ['msg'=>$r]);
        }
        return view('admin.profile.password');
    }
}
