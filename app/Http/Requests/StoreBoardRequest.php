<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBoardRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'person_id' => 'required',
            'title' => 'required',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'person_id.required' => 'person_id は必須です。',
            'title.required' => 'タイトルは必須です。',
            'message.required' => 'メッセージは必須です。',
        ];
    }
}
