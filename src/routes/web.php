<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','SheetsController@top');
Route::get('/logout','SheetsController@getLogout');
Route::get('/loginsaiyou','SheetsController@loginsaiyou');


Route::group(["middleware"=>"auth"],function(){

    

    

    Route::get('/latest','SheetsController@sheet_latest');

    // /bandsのルーティング
    Route::get('/bands','BandController@index');


    // /sheetsのルーティング
    Route::get('/sheets','SheetsController@sheet_index');
    Route::get('/sheets/{id}','SheetsController@sheet_confirm')->where('id','[0-9]+');
    Route::get('/sheets/create/{id}','SheetsController@sheet_create');
    Route::post('/sheets/store','SheetsController@sheet_store');
    Route::get('/sheets/edit/{id}','SheetsController@sheet_edit')->where('id','[0-9]+');
    Route::patch('/sheets/update/{id}','SheetsController@sheet_update')->where('id','[0-9]+');
    Route::delete('/sheets/delete/{id}','SheetsController@sheet_delete')->where('id','[0-9]+');



    // /sheets/songのルーティング
    Route::get('/sheets/song/create/{id}','SheetsController@sheet_song_create')->where('id','[0-9]+');
    Route::post('/sheets/song/store','SheetsController@sheet_song_store');

    Route::get('/sheets/song/edit/{id}','SheetsController@sheet_song_edit')->where('id','[0-9]+');
    Route::patch('/sheets/song/update/{id}','SheetsController@sheet_song_update')->where('id','[0-9]+');
    Route::delete('/sheets/song/delete/{id}','SheetsController@sheet_song_delete')->where('id','[0-9]+');



    

    // /profileのルーティング
    Route::get('/profile','ProfileController@index');
    Route::patch('/profile/update/{id}', 'ProfileController@update');
    Route::post('/profile/store/{id}', 'ProfileController@store');
    Route::get('/profile/edit/{id}','ProfileController@edit');
    



    Route::get('/sounds','SoundController@index');
    Route::get('/upload','SoundController@upload');
 


});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




// 認証画面
Route::group(['prefix' => 'auth','middleware' => 'auth.basic'], function() {

    Route::get('/test', 'TestController@view');
    

}); //})->middleware('auth.basic');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
