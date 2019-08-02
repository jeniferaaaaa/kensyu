<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ques extends Model
{
    
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'ques';

    /**
     * デフォルトで設定されている値を無効化
     *
     * @var string
     */
    const UPDATED_AT = null;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'flag','q1','q2','q3','q4','q5','q6','q7','q8','q9','q10',
        'q11','q12','q13','q14','q15','q16','q17','q18','q19','q20','q21','q22','q23','q24','q25','q26',
        'free1','free2',
    ];

    /**
     * この回答を所有するユーザを取得
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }

}
