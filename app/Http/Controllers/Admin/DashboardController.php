<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    public function __construct() {
        $this->middleware('need_admin_login');
    }

    public function __invoke() {
        return view('admin.dashboard');
    }
}
