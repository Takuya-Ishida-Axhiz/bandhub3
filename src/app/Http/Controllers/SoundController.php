<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoundController extends Controller
{
    public function index(){
        return view('sounds.index');
    }

    public function upload(){
        return view('sounds.upload');

    }
    
}
