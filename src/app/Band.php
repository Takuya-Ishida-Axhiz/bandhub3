<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $fillable = ['band_name','band_song','band_created_at'];


    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function sheets()
    {
        return $this->hasMany('App\Sheet');
    }

    

}
