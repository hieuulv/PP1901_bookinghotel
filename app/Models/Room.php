<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'room_id');
    }
}
