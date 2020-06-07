<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    //
    protected $fillable = ['user_id','band_id','date','name','time','place','song_name','song_time','song_genre','light'];

    public function band()
    {
        return $this->belongsTo(Band::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function songs()
    {
        return $this->hasMany('App\Song');
    }

    

}
