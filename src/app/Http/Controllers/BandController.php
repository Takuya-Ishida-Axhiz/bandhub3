<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Band;
use App\User;


class BandController extends Controller
{
    public function index(){
        $user = Auth::User();
        $user_id = $user->id;
        $band = User::findOrFail($user_id)->bands->first();
        $band_id = $band->id;
        $members = Band::findOrFail($band->id)->users;
        return view('band',['members'=>$members,'band'=>$band]);
    }
}
