<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function instruments()
    {
        return $this->hasMany(Instrument::class);
    }

}
