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

Route::auth();

Route::get('/',function(){
    return view('welcome');
});
//Vue.js試験版
Route::get('/test',function(){
    return view('test');
});

Route::group(['middleware' => ['UMU']],function(){//-----------------------------------利用者サイド-------------------------
    Route::get('/que', 'User\QuestionController@index');                             //アンケート回答画面
    Route::post('/que/confirm', 'User\ConfirmController@confirm');                   //アンケート回答確認画面
    Route::post('/que/confirm/complete', 'User\CompleteController@complete');        //アンケート回答完了画面
});

Route::group(['middleware' => ['Admin']],function(){//---------------------------------管理者サイド-------------------------
    Route::get('/admin',function(){ return view('admin.admin'); });                  //管理者トップ画面表示
    Route::get('/result','Admin\ResultController@result');                           //管理者結果確認画面
    Route::post('/result','Admin\CsvController@csv');                                //管理者結果CSV出力
    Route::get('/idpass',function(){                                                 //IDパスワード発行メニュー画面
        return view('admin.idpass');
    });
    Route::get('/idpass/user', 'Admin\UserIssueController@index');                   //利用者用IDパスワード発行画面
    Route::post('/idpass/user','Admin\UserIssueController@user');
    Route::get('/idpass/admin','Admin\AdminIssueController@index');                  //管理者用IDパスワード発行画面
    Route::post('/idpass/admin','Admin\AdminIssueController@admin');
});

