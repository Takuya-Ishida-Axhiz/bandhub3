<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vimeo\Laravel\Facades\Vimeo;


class SoundController extends Controller
{
    public function index(){
    // You can alias this in config/app.php.
    $videos =  Vimeo::request('/me/videos', ['per_page' => 10], 'GET');
    $datas = $videos["body"]["data"];
   

    foreach ($datas as $key => $data) {
        $movies[$key]["link"] = $data["link"];
        $movies[$key]["uri"] = $data["uri"];
        $movies[$key]["name"] = $data["name"];
        $movies[$key]["useruri"]  = $data["user"]["uri"];
        $movies[$key]["username"] = $data["user"]["name"];
        $movies[$key]["html"] = $data["embed"]["html"];

    }

    // We're done here - how easy was that, it just works
        return view('sounds.index',["movies"=>$movies]);
    }

    // public function upload(){
    
    // }
    
}