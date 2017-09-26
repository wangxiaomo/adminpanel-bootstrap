<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserScoreLog extends Model {
    protected $fillable = ['uid', 'event', 'step'];

    public static function add($uid, $event, $step) {
        return UserScoreLog::create([
            'uid'   =>  $uid,
            'event' =>  $event,
            'step'  =>  $step
        ]);
    }
}
