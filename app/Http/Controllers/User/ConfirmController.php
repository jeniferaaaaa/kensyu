<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\CreateQuesRequest;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Ques;
use App\User;

class ConfirmController extends Controller
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
     * バリデーションを通過後、値をセッションへ保存
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm(CreateQuesRequest $request)
    {
        //for文でリクエスト情報を変数へ格納、セッションへ保存
        for ($i = 1; $i <= 26; $i++){
            $data['q'.$i] = $request->input('q'.$i);
            $request->session()->put('q'.$i,$data['q'.$i]);
        }

        //以下フリー入力欄
        $data['free1'] = $request->input('free1');
        $data['free2'] = $request->input('free2');
        $request->session()->put('free1',$data['free1']);
        $request->session()->put('free2',$data['free2']);

        return view('use.confirm',$data);
    }

}
