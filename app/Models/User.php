<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model {

    use SoftDeletes;

    protected $fillable = ['name', 'email', 'password'];
    protected $dates = ['deleted_at'];

    public static function login($email, $password) {
        $u = User::where(['email'=>$email, 'password'=>md5($password)])->first();
        return $u;
    }

    public static function add($data) {
        $u = User::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password'  =>  md5($data['password'])
        ]);
        return $u;
    }

    public function status() {
        switch($this->status) {
            case 0: return '未审核';
            case 1: return '审核通过';
        }
    }
}
