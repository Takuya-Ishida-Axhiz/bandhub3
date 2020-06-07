<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['user_id','band_id','sheet_id','order','name','time','genre','light','rehe'];
}


