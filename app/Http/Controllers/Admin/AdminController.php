<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('need_admin_login');
    }

    public function index() {
        return view('admin.dashboard');
    }
}
