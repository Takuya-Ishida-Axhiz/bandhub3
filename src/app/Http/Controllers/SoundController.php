<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vimeo\Laravel\Facades\Vimeo;


class SoundController extends Controller
{
    public function index(){
    // You can alias this in config/app.php.
    $videos =  Vimeo::request('/me/videos', ['per_page' => 10], 'GET');
    // We're done here - how easy was that, it just works
        return view('sounds.index',["videos"=>$videos]);
    }

    // public function upload(){
    
    // }
    
}