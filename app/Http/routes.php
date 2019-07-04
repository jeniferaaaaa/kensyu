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
    return view('welcome');
});

Route::auth();

Route::group(['middleware' => ['UMU']],function(){
    Route::get('/que', 'QueController@index');
    Route::post('/que/confirm', 'QueController@confirm');
    Route::post('/que/confirm/complete', 'QueController@complete');
});

Route::group(['middleware' => ['Admin']],function(){
    Route::get('/admin','AdminController@index');
    Route::get('/result','AdminController@result');
    Route::post('/result','AdminController@csv');
    Route::get('/csv','AdminController@csv');
    Route::get('/idpass',function(){
        return view('admin.idpass');
    });
    Route::get('/idpass/user',function(){
        return view('admin.iduser');
    });
    Route::get('/idpass/admin',function(){
        return view('admin.idadmin');
    });
    Route::post('/idpass/user','AdminController@user');
    Route::post('/idpass/admin','AdminController@admin');
});

