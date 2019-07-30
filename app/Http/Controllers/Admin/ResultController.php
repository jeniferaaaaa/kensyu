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

    public function result()
    {
        //回答総数算出
        $ques = DB::table('ques')->count();
        //回答がない場合、エラー画面に遷移
        if($ques == ''){
            return view('admin.error');
        }

        //所属部署-----------------------------------------------
        $q1_1 = DB::table('ques')->where('q1','=','1')->count();
        $q1_2 = DB::table('ques')->where('q1','=','2')->count();
        $q1_3 = DB::table('ques')->where('q1','=','3')->count();
        $q1_4 = DB::table('ques')->where('q1','=','4')->count();
        for ($i = 1; $i <= 4; $i++){
            ${'qq'.$i} = ${'q1_'.$i}/$ques*100;
        }
        /*$qq1 = $q1_1/$ques*100;
        $qq2 = $q1_2/$ques*100;
        $qq3 = $q1_3/$ques*100;
        $qq4 = $q1_4/$ques*100;*/

        //年齢--------------------------------------------------
        $q2_1 = DB::table('ques')->where('q2','=','1')->count();
        $q2_2 = DB::table('ques')->where('q2','=','2')->count();
        $q2_3 = DB::table('ques')->where('q2','=','3')->count();
        $q2_4 = DB::table('ques')->where('q2','=','4')->count();
        $qq5 = $q2_1/$ques*100;
        $qq6 = $q2_2/$ques*100;
        $qq7 = $q2_3/$ques*100;
        $qq8 = $q2_4/$ques*100;

        //等級--------------------------------------------------
        $q3_1 = DB::table('ques')->where('q3','=','1')->count();
        $q3_2 = DB::table('ques')->where('q3','=','2')->count();
        $q3_3 = DB::table('ques')->where('q3','=','3')->count();
        $q3_4 = DB::table('ques')->where('q3','=','4')->count();
        $q3_5 = DB::table('ques')->where('q3','=','5')->count();
        $q3_6 = DB::table('ques')->where('q3','=','6')->count();
        $qq9 = $q3_1/$ques*100;
        $qq10 = $q3_2/$ques*100;
        $qq11 = $q3_3/$ques*100;
        $qq12 = $q3_4/$ques*100;
        $qq13 = $q3_5/$ques*100;
        $qq14 = $q3_6/$ques*100;

        //役職--------------------------------------------------
        $q4_1 = DB::table('ques')->where('q4','=','1')->count();
        $q4_2 = DB::table('ques')->where('q4','=','2')->count();
        $q4_3 = DB::table('ques')->where('q4','=','3')->count();
        $q4_4 = DB::table('ques')->where('q4','=','4')->count();
        $qq15 = $q4_1/$ques*100;
        $qq16 = $q4_2/$ques*100;
        $qq17 = $q4_3/$ques*100;
        $qq18 = $q4_4/$ques*100;

        //Q2-1--------------------------------------------------
        $q5_1 = DB::table('ques')->where('q5','=','1')->count();
        $q5_2 = DB::table('ques')->where('q5','=','2')->count();
        $qy1 = $q5_1/$ques*100;
        $qn1 = $q5_2/$ques*100;

        //Q2-2
        $q6_1 = DB::table('ques')->where('q6','=','1')->count();
        $q6_2 = DB::table('ques')->where('q6','=','2')->count();
        $qy2 = $q6_1/$ques*100;
        $qn2 = $q6_2/$ques*100;

        //Q2-3
        $q7_1 = DB::table('ques')->where('q7','=','1')->count();
        $q7_2 = DB::table('ques')->where('q7','=','2')->count();
        $qy3 = $q7_1/$ques*100;
        $qn3 = $q7_2/$ques*100;

        //Q2-4
        $q8_1 = DB::table('ques')->where('q8','=','1')->count();
        $q8_2 = DB::table('ques')->where('q8','=','2')->count();
        $qy4 = $q8_1/$ques*100;
        $qn4 = $q8_2/$ques*100;
        
        //Q3-1---------------------------------------------------
        $q9_1 = DB::table('ques')->where('q9','=','1')->count();
        $q9_2 = DB::table('ques')->where('q9','=','2')->count();
        $qy5 = $q9_1/$ques*100;
        $qn5 = $q9_2/$ques*100;

        //Q3-2
        $q10_1 = DB::table('ques')->where('q10','=','1')->count();
        $q10_2 = DB::table('ques')->where('q10','=','2')->count();
        $qy6 = $q10_1/$ques*100;
        $qn6 = $q10_2/$ques*100;

        //Q3-3
        $q11_1 = DB::table('ques')->where('q11','=','1')->count();
        $q11_2 = DB::table('ques')->where('q11','=','2')->count();
        $qy7 = $q11_1/$ques*100;
        $qn7 = $q11_2/$ques*100;

        //Q3-4
        $q12_1 = DB::table('ques')->where('q12','=','1')->count();
        $q12_2 = DB::table('ques')->where('q12','=','2')->count();
        $qy8 = $q12_1/$ques*100;
        $qn8 = $q12_2/$ques*100;        

        //Q4-1----------------------------------------------------
        $q13_1 = DB::table('ques')->where('q13','=','1')->count();
        $q13_2 = DB::table('ques')->where('q13','=','2')->count();
        $qy9 = $q13_1/$ques*100;
        $qn9 = $q13_2/$ques*100;

        //Q4-2
        $q14_1 = DB::table('ques')->where('q14','=','1')->count();
        $q14_2 = DB::table('ques')->where('q14','=','2')->count();
        $qy10 = $q14_1/$ques*100;
        $qn10 = $q14_2/$ques*100;

        //Q4-3
        $q15_1 = DB::table('ques')->where('q15','=','1')->count();
        $q15_2 = DB::table('ques')->where('q15','=','2')->count();
        $qy11 = $q15_1/$ques*100;
        $qn11 = $q15_2/$ques*100;

        //Q4-4
        $q16_1 = DB::table('ques')->where('q16','=','1')->count();
        $q16_2 = DB::table('ques')->where('q16','=','2')->count();
        $qy12 = $q16_1/$ques*100;
        $qn12 = $q16_2/$ques*100;        
       
        //Q5-1----------------------------------------------------
        $q17_1 = DB::table('ques')->where('q17','=','1')->count();
        $q17_2 = DB::table('ques')->where('q17','=','2')->count();
        $qy13 = $q17_1/$ques*100;
        $qn13 = $q17_2/$ques*100;

        //Q5-2
        $q18_1 = DB::table('ques')->where('q18','=','1')->count();
        $q18_2 = DB::table('ques')->where('q18','=','2')->count();
        $qy14 = $q18_1/$ques*100;
        $qn14 = $q18_2/$ques*100;

        //Q5-3
        $q19_1 = DB::table('ques')->where('q19','=','1')->count();
        $q19_2 = DB::table('ques')->where('q19','=','2')->count();
        $qy15 = $q19_1/$ques*100;
        $qn15 = $q19_2/$ques*100;

        //Q5-4
        $q20_1 = DB::table('ques')->where('q20','=','1')->count();
        $q20_2 = DB::table('ques')->where('q20','=','2')->count();
        $qy16 = $q20_1/$ques*100;
        $qn16 = $q20_2/$ques*100;        
       
        //Q5-5
        $q21_1 = DB::table('ques')->where('q21','=','1')->count();
        $q21_2 = DB::table('ques')->where('q21','=','2')->count();
        $qy17 = $q21_1/$ques*100;
        $qn17 = $q21_2/$ques*100;        

        //Q6-1----------------------------------------------------
        $q22_1 = DB::table('ques')->where('q22','=','1')->count();
        $q22_2 = DB::table('ques')->where('q22','=','2')->count();
        $qy18 = $q22_1/$ques*100;
        $qn18 = $q22_2/$ques*100;

        //Q6-2
        $q23_1 = DB::table('ques')->where('q23','=','1')->count();
        $q23_2 = DB::table('ques')->where('q23','=','2')->count();
        $qy19 = $q23_1/$ques*100;
        $qn19 = $q23_2/$ques*100;

        //Q6-3
        $q24_1 = DB::table('ques')->where('q24','=','1')->count();
        $q24_2 = DB::table('ques')->where('q24','=','2')->count();
        $qy20 = $q24_1/$ques*100;
        $qn20 = $q24_2/$ques*100;

        //Q6-4
        $q25_1 = DB::table('ques')->where('q25','=','1')->count();
        $q25_2 = DB::table('ques')->where('q25','=','2')->count();
        $qy21 = $q25_1/$ques*100;
        $qn21 = $q25_2/$ques*100;        
       
        //Q6-5
        $q26_1 = DB::table('ques')->where('q26','=','1')->count();
        $q26_2 = DB::table('ques')->where('q26','=','2')->count();
        $qy22 = $q26_1/$ques*100;
        $qn22 = $q26_2/$ques*100;        


        return view('admin.result',compact('ques','qq1','qq2','qq3','qq4','qq5','qq6','qq7','qq8','qq9','qq10',
                                    'qq11','qq12','qq13','qq14','qq15','qq16','qq17','qq18',
                                    'qy1','qn1','qy2','qn2','qy3','qn3','qy4','qn4',
                                    'qy5','qn5','qy6','qn6','qy7','qn7','qy8','qn8',
                                    'qy9','qn9','qy10','qn10','qy11','qn11','qy12','qn12',
                                    'qy13','qn13','qy14','qn14','qy15','qn15','qy16','qn16','qy17','qn17',
                                    'qy18','qn18','qy19','qn19','qy20','qn20','qy21','qn21','qy22','qn22',));
    }

    public function csv()
    {
        //とってきた値をラベルに変換する処理を入れる
        
        //DBから情報取得
        $stdArray = DB::table('ques')->select('q1','q2','q3','q4','q5','q6','q7','q8','q9','q10',
                                          'q11','q12','q13','q14','q15','q16','q17','q18','q19','q20',
                                          'q21','q22','q23','q24','q25','q26','free1','free2')->get();

        //stdclassをただの配列へ返還
        $data = json_decode(json_encode($stdArray), true);

        //csvのヘッダー作成
        $head = array('Q1-1','Q1-2','Q1-3','Q1-4','Q2-1','Q2-2','Q2-3','Q2-4','Q3-1','Q3-2',
                      'Q3-3','Q3-4','Q4-1','Q4-2','Q4-3','Q4-4','Q5-1','Q5-2','Q5-3','Q5-4',
                      'Q5-5','Q6-1','Q6-2','Q6-3','Q6-4','Q6-5','Q7-1','Q7-2');

        //ループでcsvを作成
        $file = fopen('test.csv','w');
        //ヘッダーを先に書き込み
        fputcsv($file,$head);
        //ループでまわしてデータを書き込み
        foreach($data as $val){
            fputcsv($file,$val);
        }
        fclose($file);

        return response()->download('test.csv');
    }

}