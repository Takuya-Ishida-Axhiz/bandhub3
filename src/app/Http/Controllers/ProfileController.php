<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;


use App\Http\Requests\ProfileRequest;

use Auth;

class ProfileController extends Controller
{
    
    public function index(){
        $auths = Auth::user(); 
        $is_image = false;
        if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {$is_image = true;}
        return view('profile.profile',[ 'auths' => $auths ,'is_image' => $is_image]);


    }

    public function edit(){
        $auths = Auth::user();
        $is_image = false;
        if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {$is_image = true;}
        return view('profile.profile_edit',[ 'auths' => $auths,'is_image' => $is_image ]);

        
    }

    public function store(ProfileRequest $request)
    {
        $request->photo->storeAs('public/profile_images', Auth::id() . '.jpg');
 
        // transliterator_transliterate
        return redirect('profile')->with('success', '新しいプロフィールを登録しました');
    }

    
    
}
