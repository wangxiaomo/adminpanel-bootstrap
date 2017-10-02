<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class LogoutController extends Controller {

    public function __invoke() {
        request()->session()->forget('admin_uid');
        return redirect()->route('admin.login');
    }
}
