<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class TestController extends Controller
{
    public function test()
    {
        $test1 = DB::table('users')->where('id',1)->value('name');
        $test2 = DB::table('users')->where('id',2)->value('email');
        $test3 = DB::table('users')->where('id',3)->value('email');
        $test4 = DB::table('users')->where('id',4)->value('email');
        $test5 = DB::table('users')->where('id',5)->value('email');

        return view ('test', compact('test1','test2','test3','test4','test5'));

    }
}
