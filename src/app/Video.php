<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function band()
    {
        return $this->belongsTo(Band::class);
    }
}
