<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CsvValidateRequest;
use Illuminate\Http\Request;
use App\Ques;
use App\User;
use DB;
use Auth;
use Mail;
use Validator;
use App\Exceptions;;

class UserIssueController extends Controller
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

    public function index()
    {
        return view ('admin.iduser');
    }

    public function user(CsvValidateRequest $request)
    {
        //CSV読み込み処理
        $file = $request->file('csv_file');//リクエストからファイルを受信→変数へ
        
        try{
            $r_file = fopen($file,'r');
            //読み込みに失敗した場合、例外を投げる
            if ($r_file == FALSE){
                throw new \Exception('ファイルの読み込みに失敗しました！');
            }
            $count = 0 ;//ループカウントボックス

            //CSVをループで取得し、配列に格納
            while(($data = fgetcsv($r_file, 1000, ",")) !== FALSE){

                //ID・パスワードランダム生成
                $id[] = substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),0,10);
                $pass[] = substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_'),0,8);
                $getName[] = $data[0];//メール送信用の名前を入れる配列
                $getData[] = $data[1];//メールアドレスを入れる配列
                $count = $count + 1;

            }
            fclose($r_file);

            //DB二重登録防止処理
            for ($i = 0;$i < $count;$i++){
                $boo = DB::table('users')->where('email','=', $getData[$i])
                                         ->exists();
                //既に登録がある場合例外を投げる
                if ($boo){
                    throw new \Exception('CSVファイルの'.$i.'行目が既にDBに登録されています！');
                    return exit;
                }
            }

            //DB登録とメール送信をカウントボックス分ループ処理
            for ($i = 0;$i < $count;$i++){
                //モデルインスタンスを作成してDB登録
                User::create([
                    'name' => $id[$i], 
                    'email' => $getData[$i], 
                    'password' => bcrypt($pass[$i]),
                    'flag' => 0,//利用者なので0
                ]);
            
                //メール送信
                Mail::send('emails.mail', compact('id','pass','file','getName','i'), function ($message) use($getData,$i) {
                    $message->from('kami@example.com', '神');
            
                    $message->to($getData[$i])->subject('じぇにふぁアンケートシステムアカウント発行のお知らせ');
                });
            
            }

            return redirect('idpass/user')->with('success','登録が完了しました！');

        }catch( \Exception $e){
            //エラーが発生した場合、処理中断
            return redirect('idpass/user')->with('error', $e->getMessage());

        }
    }
}