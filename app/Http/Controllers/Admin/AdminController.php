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
        return view('admin.users.create');
    }
}
