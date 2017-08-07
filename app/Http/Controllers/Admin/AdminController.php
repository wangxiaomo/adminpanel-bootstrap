<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('need_admin_login');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function users() {
        $users = AdminUser::get_all();
        return view('admin.users.index', ['users' => $users]);
    }

    public function create_user() {
        if(request()->isMethod('post')){
            $data = request()->all();
            $is_unvalid = AdminUser::check_user_data($data['name'], $data['email']);
            if($is_unvalid){
                return view('admin.users.create', ['data'=>$data, 'msg'=>$is_unvalid]);
            }else{
                $u = AdminUser::add($data);
                return view('admin.users.create', ['msg' => '创建成功']);
            }
        }
        return view('admin.users.create');
    }
}
