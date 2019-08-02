<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CsvValidateRequest extends Request
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'csv_file' => 'required|file|mimetypes:text/plain|mimes:csv,txt',
        ];
    }

    public function messages()
    {
        return [
            'csv_file.required' => 'アップロードファイルを選択してください。',
            'csv_file.file' => 'アップロードファイルの形式が間違っています。',
            'csv_file.mimetypes' => 'アップロードファイルはcsvではありません',
            'csv_file.mimes' => 'アップロードファイルはcsvではありません。',
        ];
    }
}
