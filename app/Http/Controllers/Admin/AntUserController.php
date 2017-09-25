<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;


class AntUserController extends Controller {
    public function __construct() {
        $this->middleware('need_admin_login');
    }

    public function users() {
        $conditions = [];
        $status = request()->input('status', -1);
        if($status != -1){
            array_push($conditions, ['status', '=', $status]);
        }
        $users = User::where($conditions)->paginate(20);
        return view('admin.ants.index', ['users' => $users, 'status' => $status]);
    }

    public function query($query) {
        $conditions = [];
        $status = request()->input('status', -1);
        if($status != -1){
            array_push($conditions, ['status', '=', $status]);
        }
        $users = User::where($conditions)->where(function($q) use ($query){
            $q->where("name", "like", "%$query%")
              ->orWhere("email", "like", "%$query%");
        })->paginate(20);
        return view('admin.ants.index', ['users' => $users, 'status' => $status]);
    }
}
