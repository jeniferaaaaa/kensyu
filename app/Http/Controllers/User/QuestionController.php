<?php

namespace App\Http\Controllers\User;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Ques;
use App\User;

class QuestionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * 回答があった場合、エラー画面を表示させる。
     * 回答なしの場合、通常遷移
     *
     * @return void
     */
    public function index()
    {
        //ログインユーザ取得
        $id = Auth::user()->id;
        
        //回答フラグ存在チェック
        $flag = DB::table('ques')->where('user_id','=',$id)
                                 ->exists();//true or false

        //回答フラグによって切り替え
        if ($flag == true){
            return view('use.error');
        }else{
            return view('use.que');
        }
    }

}
