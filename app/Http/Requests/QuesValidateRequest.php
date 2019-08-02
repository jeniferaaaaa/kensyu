<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class QuesValidateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * 入力画面→確認画面のバリデーション
     *
     * @return array
     */
    public function rules()
    {
        return [
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
        ];
    }

    public function messages()
    {
        return [
            'q1.required' => 'Q1-1を選択してください。',
            'q2.required' => 'Q1-2を選択してください。',
            'q3.required' => 'Q1-3を選択してください。',
            'q4.required' => 'Q1-4を選択してください。',
            'q5.required' => 'Q2-1を選択してください。',
            'q6.required' => 'Q2-2を選択してください。',
            'q7.required' => 'Q2-3を選択してください。',
            'q8.required' => 'Q2-4を選択してください。',
            'q9.required' => 'Q3-1を選択してください。',
            'q10.required' => 'Q3-2を選択してください。',
            'q11.required' => 'Q3-3を選択してください。',
            'q12.required' => 'Q3-4を選択してください。',
            'q13.required' => 'Q4-1を選択してください。',
            'q14.required' => 'Q4-2を選択してください。',
            'q15.required' => 'Q4-3を選択してください。',
            'q16.required' => 'Q4-4を選択してください。',
            'q17.required' => 'Q5-1を選択してください。',
            'q18.required' => 'Q5-2を選択してください。',
            'q19.required' => 'Q5-3を選択してください。',
            'q20.required' => 'Q5-4を選択してください。',
            'q21.required' => 'Q5-5を選択してください。',
            'q22.required' => 'Q6-1を選択してください。',
            'q23.required' => 'Q6-2を選択してください。',
            'q24.required' => 'Q6-3を選択してください。',
            'q25.required' => 'Q6-4を選択してください。',
            'q26.required' => 'Q6-5を選択してください。',
            'free1.required' => 'Q7-1を入力してください。',
            'free1.string' => 'Q7-1に不正な値が入力されています。',
            'free1.max' => 'Q7-1は4文字以上100文字以内で入力してください。',
            'free1.min' => 'Q1-1は4文字以上100文字以内で入力してください。',
            'free2.max' => 'Q7-2は4文字以上100文字以内で入力してください。',
            'free2.min' => 'Q7-2は4文字以上100文字以内で入力してください。',
            'free2.string' => 'Q7-2に不正な値が入力されています。',
        ];
    }

}
