<?php

namespace App\Http\Controllers;

class LogoutController extends Controller {

    public function __invoke() {
        request()->session()->forget('admin_uid');
        return redirect('/login');
    }
}
