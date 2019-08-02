<?php

namespace App\Http\Controllers\User;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Ques;
use App\User;

class CompleteController extends Controller
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
     * 値の受け取り、DB登録
     *
     * @return \Illuminate\Http\Response
     */
    public function complete(Request $request)
    {
        //for文でセッション情報を取り出し変数へ格納
        for ($i = 1; $i <= 26; $i++){
            ${'q'.$i} = $request->session()->get('q'.$i);
        }
        $free1 = $request->session()->get('free1');
        $free2 = $request->session()->get('free2');

        //ログイン中のユーザの情報を取得
        $user_id = Auth::user()->id;

        //モデルインスタンスを利用するやり方
        Ques::create([
            'user_id' => $user_id,
            'q1' => $q1,
            'q2' => $q2,
            'q3' => $q3,
            'q4' => $q4,
            'q5' => $q5,
            'q6' => $q6,
            'q7' => $q7,
            'q8' => $q8,
            'q9' => $q9,
            'q10' => $q10,
            'q11' => $q11,
            'q12' => $q12,
            'q13' => $q13,
            'q14' => $q14,
            'q15' => $q15,
            'q16' => $q16,
            'q17' => $q17,
            'q18' => $q18,
            'q19' => $q19,
            'q20' => $q20,
            'q21' => $q21,
            'q22' => $q22,
            'q23' => $q23,
            'q24' => $q24,
            'q25' => $q25,
            'q26' => $q26,
            'free1' => $free1,
            'free2' => $free2,
        ]);

        return view('use.complete');
    }

}
