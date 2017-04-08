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
Auth::routes();
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', [
    'uses'=> 'HomeController@index',
    'as' => 'home.index'
    ]);

Route::get('/',function (){
    return view('home');
});

Route::get('register','UserController@getRegister');
Route::post('/register',[
    'as' => 'post.register',

    'uses' => 'UserController@postRegister'
    ]);


Route::resource('maps','GmapsController');

Route::post('/maps','GmapsController@index');

Route::get('/showMap',[
    'as' => 'showmap.index',
    'uses' => 'GmapsController@showMap'
]);


//Route::get('/create', 'TripsController@create');

Route::resource('trip','TripsController');

Route::get('maps/details/{id}',[
    'as'=> 'details',
    'uses'=>'GmapsController@details'
]);
Route::get('/showlist',[
    'as' => 'showlist',
    'uses' => 'HomeController@showList'
]);
Route::get('{zip}/{street}',[
    'as'=> 'trip.addPhoto',
    'uses'=>'TripsController@show'
]);

Route::post('{zip}/{street}/photos','TripsController@addPhoto');





