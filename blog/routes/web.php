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

Route::get('/', function () {
    return view('index');
});
Route::get('/register', function () {
    return view("form");
});
Route::get('/welcome/{namadepan}/{namabelakang}', function ($namadepan,$namabelakang) {
    return view("welcome",["namadepan"=>$namadepan,"namabelakang"=>$namabelakang]);
});
Route::get('/redirect','HomeController@redirect');
Route::get('/datang','AuthController@datang');
Route::post('/datang','AuthController@datang_post');