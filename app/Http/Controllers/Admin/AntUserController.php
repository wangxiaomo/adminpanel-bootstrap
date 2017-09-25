<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;


class AntUserController extends Controller {
    public function __construct() {
        $this->middleware('need_admin_login');
    }

    public function users() {
        $users = User::paginate(20);
        return view('admin.ants.index', ['users' => $users]);
    }
}
