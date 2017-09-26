<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\UserScoreLog;

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

    public function update_score($step, $event='') {
        UserScoreLog::add($this->id, $event, $step);
        $this->score += intval($step);
        $this->save();
        return $this->score;
    }
}
