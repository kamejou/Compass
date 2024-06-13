<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // 認証は別で行うため、常に true を返す
    }

    public function rules()
    {
        return [
            'over_name' =>  'required|string|max:10',
            'under_name' =>  'required|string|max:10',
            'over_name_kana' => 'required|string|regex:/^[ァ-ヶー]+$/u|max:30',
            'under_name_kana' => 'required|string|regex:/^[ァ-ヶー]+$/u|max:30',
            'mail_address' => 'required|email|unique:users|max:100',
            'sex' => 'required|in:男性,女性,その他',
            'old_year' => 'required|date_format:Y-m-d|before_or_equal:today|after_or_equal:2000-01-01',
            'role' =>  'required|in:講師(国語),講師(数学),教師(英語),生徒',
            'password' =>  'required|string|min:8|max:30|same:password_confirmation',
        ];
    }
}
