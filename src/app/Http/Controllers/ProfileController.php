<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

use Auth;
use App\User;
use App\Band;

class ProfileController extends Controller
{
    
    public function index(){
        $auths = Auth::user();
        $auth_id = $auths->id;
        $band = User::findOrFail($auth_id)->bands->first();       
        $is_image = false;
        if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {$is_image = true;}
        return view('profile.profile',[ 'auths' => $auths ,'is_image' => $is_image, 'band' => $band]);


    }

    public function edit(){
        $auths = Auth::user();
        $is_image = false;
        if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {$is_image = true;}
        return view('profile.profile_edit',[ 'auths' => $auths,'is_image' => $is_image ]);

        
    }

    public function store (ProfileRequest $request)
    {
        $request->photo->storeAs('public/profile_images', Auth::id() . '.jpg');

        return redirect('/profile')->with('success', '新しいプロフィールを登録しました');
    }

    
    public function update(Request $request){
        // $this->validate($request , [
        //     'name' => 'required',
        //     'part' => 'required',
        //     'comments' => 'required',
        //     'date' => 'required'
        // ]);
        

        $auths = Auth::user();
        $auths->name = $request->name;
        $auths->age = $request->age;
        $auths->gender = $request->gender;
        $auths->part = $request->part;
        $auths->instruments = $request->instruments;
        $auths->inst_comments = $request->inst_comments;

        $auths->genre = $request->genre;
        $auths->comments = $request->comments;
        $auths->save();
        return redirect('/profile');
    }
    
    
}
