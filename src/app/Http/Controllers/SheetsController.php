<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Band;
use App\Sheet;
use App\Song;
use App\Band_user;

class SheetsController extends Controller
{
    // お邪魔します。。
    public function getLogout(){
        Auth::logout();
        return redirect('/login');
        }

    public function loginsaiyou(){
        return view('/loginsaiyou');
        }
    


   
    public function sheet_latest(){
        $sheet = Sheet::latest()->first();
        $songs = Sheet::latest()->first()->songs;
        
        return view('sheets.sheet_latest',['sheet' => $sheet,'songs'=> $songs]);
    }


    public function sheet_index(){
        $user = Auth::User();
        $user_id = $user->id;
        $bands = $user->bands()->get();
        foreach ($bands as $band) {
            $band_id[] = $band->id;
        }
        $sheets = Sheet::whereIn('band_id',$band_id)->get();
        return view('sheets.sheet_index',['sheets' => $sheets]);
    }

    public function sheet_confirm($id){
        $user = Auth::User();
        $user_id = $user->id;
        $band = User::findOrFail($user_id)->bands->first();
        $band_id = $band->id;
        $members = Band::findOrFail($band->id)->users;
        
        $sheet = Sheet::findOrFail($id);
        $songs = Sheet::findOrFail($id)->songs;
        return view('sheets.sheet_confirm',['sheet' => $sheet,'songs'=> $songs,'members'=> $members]);
    }




    public function sheet_create($id){
        return view('sheets.sheet_create',['id'=>$id]);
    }

    public function sheet_store(Request $request){
        $this->validate($request , [
            'name' => 'required',
            'place' => 'required',
            'time' => 'required',
            'date' => 'required'
        ]);
        
        $sheet = new Sheet();
        $sheet->name = $request->name;
        $sheet->time = $request->time;
        $sheet->date = $request->date;
        $sheet->place = $request->place;
        $sheet->band_id = $request->band_id;
        $sheet->save();
        return redirect('/');
    }

    public function sheet_edit ($id){
        $sheet = Sheet::findOrFail($id);
        $songs = Sheet::findOrFail($id)->songs;
        return view('sheets.sheet_edit',['sheet' => $sheet,'songs'=> $songs]);
    }


    public function sheet_update(Request $request){
        $this->validate($request , [
            'name' => 'required',
            'place' => 'required',
            'time' => 'required',
            'date' => 'required'
        ]);

        $sheet = Sheet::findOrFail($request->id);
        
        $sheet->name = $request->name;
        $sheet->time = $request->time;
        $sheet->date = $request->date;
        $sheet->place = $request->place;
        $sheet->band_id = $request->band_id;
        $sheet->save();
        return redirect('/');
    }

    public function sheet_delete($id){  
        $sheet = Sheet::findOrFail($id);
        $sheet->delete();
        return redirect('/sheets');
    }


    public function top(){    
        return view('top');
    }



    
    public function sheet_song_create($id){
        return view('sheets.song_create',['id'=>$id]);
    }
    
    public function sheet_song_store(Request $request){
        $this->validate($request , [
            'name' => 'required',
            'order' => 'required',
            'genre' => 'required',
            'time' => 'required'
        ]);
        
        $song = new Song();
        $song->order = $request->order;
        $song->name = $request->name;
        $song->time = $request->time;
        $song->genre = $request->genre;
        $song->light = $request->light;
        $song->rehe = $request->rehe;
        $song->sheet_id = $request->sheet_id;
        $song->save();
        return redirect('/sheets');
    }


    
    public function sheet_song_edit ($id){
        
        $song = Song::findOrFail($id);
        $sheet = Sheet::findOrFail($song->sheet_id);
        return view('sheets.sheet_song_edit',['song'=> $song,'sheet'=>$sheet]);
    }


    
    public function sheet_song_update(Request $request){
        $this->validate($request , [
            'order' => 'required',
            'name' => 'required',
            'time' => 'required',
            'genre' => 'required'
        ]);

        $song = Song::findOrFail($request->id);
        
        $song->order = $request->order;
        $song->name = $request->name;
        $song->time = $request->time;
        $song->genre = $request->genre;
        $song->light = $request->light;
        $song->rehe = $request->rehe;
        $song->sheet_id = $request->sheet_id;
        $song->save();
        return redirect('/sheets');
    }

    public function sheet_song_delete($id){  
        $song = Song::findOrFail($id);
        $song->delete();
        return redirect('/sheets');
    }

}
