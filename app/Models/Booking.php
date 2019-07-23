<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }

    public function room()
    {
        return $this->belongsTo('App\Models\Room', 'id');
    }
}
