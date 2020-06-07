<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band_user extends Model
{
    protected $fillable = [
        'band_id','user_id','created_at','updated_at'
    ];

    protected $table = 'band_user';
}
