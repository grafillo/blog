<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentsRequest extends FormRequest
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
            'autor' => 'required|max:100',
            'comment' => 'required',

        ];
    }


    public function messages()
    {
        return [

            "autor.required" => "Поле 'имя автора' не может быть пустым!",
            "autor.max" => "В поле 'имя автора' не должно быть больше 100 символов!",
            "comment.required" => "Введите текст комментария!",


        ];
    }
}
