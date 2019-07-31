<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Ques;
use App\User;
use DB;
use Auth;
use Mail;
use Validator;

class ResultController extends Controller
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
     *  アンケートの集計結果をCSVでダウンロードさせるメソッド
     * 
     */

    public function csv()
    {
        //データ取得        
        $data = $this->columns();

        //まず設問ごとのカラムにまとめる
        $q1 = array_column($data,'q1');
        $q2 = array_column($data,'q2');
        $q3 = array_column($data,'q3');
        $q4 = array_column($data,'q4');
        $q5 = array_column($data,'q5');
        $q6 = array_column($data,'q6');
        $q7 = array_column($data,'q7');
        $q8 = array_column($data,'q8');
        $q9 = array_column($data,'q9');
        $q10 = array_column($data,'q10');
        $q11 = array_column($data,'q11');
        $q12 = array_column($data,'q12');
        $q13 = array_column($data,'q13');
        $q14 = array_column($data,'q14');
        $q15 = array_column($data,'q15');
        $q16 = array_column($data,'q16');
        $q17 = array_column($data,'q17');
        $q18 = array_column($data,'q18');
        $q19 = array_column($data,'q19');
        $q20 = array_column($data,'q20');
        $q21 = array_column($data,'q21');
        $q22 = array_column($data,'q22');
        $q23 = array_column($data,'q23');
        $q24 = array_column($data,'q24');
        $q25 = array_column($data,'q25');
        $q26 = array_column($data,'q26');
        $free1 = array_column($data,'free1');
        $free2 = array_column($data,'free2');

        //数値から文字列へ変換処理
        $rep1 = $this->replace_Q1($q1);
        $rep2 = $this->replace_Q2($q2);
        $rep3 = $this->replace_Q3($q3);
        $rep4 = $this->replace_Q4($q4);
        $rep5 = $this->replace_OR($q5);
        $rep6 = $this->replace_OR($q6);
        $rep7 = $this->replace_OR($q7);
        $rep8 = $this->replace_OR($q8);
        $rep9 = $this->replace_OR($q9);
        $rep10 = $this->replace_OR($q10);
        $rep11 = $this->replace_OR($q11);
        $rep12 = $this->replace_OR($q12);
        $rep13 = $this->replace_OR($q13);
        $rep14 = $this->replace_OR($q14);
        $rep15 = $this->replace_OR($q15);
        $rep16 = $this->replace_OR($q16);
        $rep17 = $this->replace_OR($q17);
        $rep18 = $this->replace_OR($q18);
        $rep19 = $this->replace_OR($q19);
        $rep20 = $this->replace_OR($q20);
        $rep21 = $this->replace_OR($q21);
        $rep22 = $this->replace_OR($q22);
        $rep23 = $this->replace_OR($q23);
        $rep24 = $this->replace_OR($q24);
        $rep25 = $this->replace_OR($q25);
        $rep26 = $this->replace_OR($q26);

        //再度、整形
        $resultData = array_map(null,$rep1,$rep2,$rep3,$rep4,$rep5,$rep6,$rep7,$rep8,$rep9,$rep10,$rep11,$rep12,$rep13,$rep14,$rep15,$rep16,
                                     $rep17,$rep18,$rep19,$rep20,$rep21,$rep22,$rep23,$rep24,$rep25,$rep26,$free1,$free2);
                
        //csvのヘッダー作成
        $head = array('Q1-1','Q1-2','Q1-3','Q1-4','Q2-1','Q2-2','Q2-3','Q2-4','Q3-1','Q3-2',
                      'Q3-3','Q3-4','Q4-1','Q4-2','Q4-3','Q4-4','Q5-1','Q5-2','Q5-3','Q5-4',
                      'Q5-5','Q6-1','Q6-2','Q6-3','Q6-4','Q6-5','Q7-1','Q7-2');

        //ループでcsvを作成
        $file = fopen('test.csv','w');
        //ヘッダーを先に書き込み
        fputcsv($file,$head);
        //ループでまわしてデータを書き込み
        foreach($resultData as $val){
            fputcsv($file,$val);
        }
        fclose($file);

        return response()->download('test.csv');
    }

    /**
     *  DBから取得した数値を文字列へ置換するメソッド
     * 
     * @return array
     */

    private function replace_Q1 ($value)
    {
        //置換用配列
        $before = array(1,2,3,4);
        $after = array('事業推進統括部','サービス管理統括部','DX第一統括部','DX第二統括部');
        $result = str_replace($before,$after,$value);

        return $result;
    }

    private function replace_Q2 ($value)
    {
        //置換用配列
        $before = array(1,2,3,4);
        $after = array('20代','30代','40代以上','人間じゃない');
        $result = str_replace($before,$after,$value);

        return $result;
    }

    private function replace_Q3 ($value)
    {
        //置換用配列
        $before = array(1,2,3,4,5,6);
        $after = array('等級1','等級2','等級3','等級4','等級5','年棒');
        $result = str_replace($before,$after,$value);

        return $result;
    }

    private function replace_Q4 ($value)
    {
        //置換用配列
        $before = array(1,2,3,4);
        $after = array('一般','リーダ','マネージャ','管理職以上');
        $result = str_replace($before,$after,$value);

        return $result;
    }

    private function replace_OR ($value)
    {
        //置換用配列
        $before = array(1,2);
        $after = array('はい','いいえ');
        $result = str_replace($before,$after,$value);

        return $result;
    }

}