<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    // return view('welcome');
    // Config::set('app.timezone','UTC+8');
    // echo Config::get('app.timezone');//获取文件config文件中的app文件中的timezone
    // echo Config::get('app.locale');
    // echo Config::get('app.webname');
    // echo env('DB_DATABASE');
});

//基本路由
Route::get('love',function(){
echo 'this is love love';
});

Route::post('form',function(){
	echo 'this is a post';
});

Route::get('test',function(){
	return view('form');
});