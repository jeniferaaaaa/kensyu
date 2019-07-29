<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
    public function confirm(Request $request)
    {
        //バリデーション実装（別ファイルに書き込みたい）
        $this->validate($request, [
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
            'q9' => 'required',
            'q10' => 'required',
            'q11' => 'required',
            'q12' => 'required',
            'q13' => 'required',
            'q14' => 'required',
            'q15' => 'required',
            'q16' => 'required',
            'q17' => 'required',
            'q18' => 'required',
            'q19' => 'required',
            'q20' => 'required',
            'q21' => 'required',
            'q22' => 'required',
            'q23' => 'required',
            'q24' => 'required',
            'q25' => 'required',
            'q26' => 'required',
            'free1' => 'required|string|min:4|max:100',
            'free2' => 'string|min:4|max:100',
        ],[
            'q1.required' => ':attributeを選択してください。',
            'q2.required' => ':attributeを選択してください。',
            'q3.required' => ':attributeを選択してください。',
            'q4.required' => ':attributeを選択してください。',
            'q5.required' => ':attributeを選択してください。',
            'q6.required' => ':attributeを選択してください。',
            'q7.required' => ':attributeを選択してください。',
            'q8.required' => ':attributeを選択してください。',
            'q9.required' => ':attributeを選択してください。',
            'q10.required' => ':attributeを選択してください。',
            'q11.required' => ':attributeを選択してください。',
            'q12.required' => ':attributeを選択してください。',
            'q13.required' => ':attributeを選択してください。',
            'q14.required' => ':attributeを選択してください。',
            'q15.required' => ':attributeを選択してください。',
            'q16.required' => ':attributeを選択してください。',
            'q17.required' => ':attributeを選択してください。',
            'q18.required' => ':attributeを選択してください。',
            'q19.required' => ':attributeを選択してください。',
            'q20.required' => ':attributeを選択してください。',
            'q21.required' => ':attributeを選択してください。',
            'q22.required' => ':attributeを選択してください。',
            'q23.required' => ':attributeを選択してください。',
            'q24.required' => ':attributeを選択してください。',
            'q25.required' => ':attributeを選択してください。',
            'q26.required' => ':attributeを選択してください。',
            'free1.required' => ':attributeを入力してください。',
            'free1.string' => ':attributeに不正な値が入力されています。',
            'free1.max' => ':attributeは4文字以上100文字以内で入力してください。',
            'free1.min' => ':attributeは4文字以上100文字以内で入力してください。',
            'free2.max' => ':attributeは4文字以上100文字以内で入力してください。',
            'free2.min' => ':attributeは4文字以上100文字以内で入力してください。',
            'free2.string' => ':attributeに不正な値が入力されています。',
        ],[
            'q1' => 'Q1-1',
            'q2' => 'Q1-2',
            'q3' => 'Q1-3',
            'q4' => 'Q1-4',
            'q5' => 'Q2-1',
            'q6' => 'Q2-2',
            'q7' => 'Q2-3',
            'q8' => 'Q2-4',
            'q9' => 'Q3-1',
            'q10' => 'Q3-2',
            'q11' => 'Q3-3',
            'q12' => 'Q3-4',
            'q13' => 'Q4-1',
            'q14' => 'Q4-2',
            'q15' => 'Q4-3',
            'q16' => 'Q4-4',
            'q17' => 'Q5-1',
            'q18' => 'Q5-2',
            'q19' => 'Q5-3',
            'q20' => 'Q5-4',
            'q21' => 'Q5-5',
            'q22' => 'Q6-1',
            'q23' => 'Q6-2',
            'q24' => 'Q6-3',
            'q25' => 'Q6-4',
            'q26' => 'Q6-5',
            'free1' => 'Q7-1',
            'free2' => 'Q7-2',
        ]);

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
