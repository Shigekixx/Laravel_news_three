<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|max:30',
            'news'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'タイトルが空欄です',
            'title.max:30'=>'タイトルは30文字以内で入力してください',
            'news.required'=>'本文が空欄です',
        ];
    }
    public function passedValidation()
    {

    }
}
