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

    public function tutu(){

    }

    public function rules()
    {
        return [
            'over_name' => 'required|string|max:60',
            'under_name' => 'required|string|max:60',
            'over_name_kana' => 'required|string|regex:/^[ァ-ヶー]+$/u|max:60',
            'under_name_kana' => 'required|string|regex:/^[ァ-ヶー]+$/u|max:60',
            'mail_address' => 'required|email|unique:users|max:255',
            'sex' => 'required|in:1,2,3',
            'old_year' => 'required|integer|date_format:Y',
            'old_month' => 'required|between:1,12',
            'old_day' => 'required|between:1,31',
            'role' => 'required|in:1,2,3,4',
            'password' => 'required|string|min:8|max:30|confirmed',
            'password_confirmation' => 'required|string|min:8|max:30',
        ];
    }

    public function messages()
    {
        return [
            'over_name.required' => '姓を入力してください。',
            'over_name.string' => '姓は文字列である必要があります。',
            'over_name.max' => '姓は60文字以内で入力してください。',

            'under_name.required' => '名を入力してください。',
            'under_name.string' => '名は文字列である必要があります。',
            'under_name.max' => '名は60文字以内で入力してください。',

            'over_name_kana.required' => '姓のカナを入力してください。',
            'over_name_kana.string' => '姓のカナは文字列である必要があります。',
            'over_name_kana.regex' => '姓のカナはカタカナのみで入力してください。',
            'over_name_kana.max' => '姓のカナは60文字以内で入力してください。',

            'under_name_kana.required' => '名のカナを入力してください。',
            'under_name_kana.string' => '名のカナは文字列である必要があります。',
            'under_name_kana.regex' => '名のカナはカタカナのみで入力してください。',
            'under_name_kana.max' => '名のカナは60文字以内で入力してください。',

            'mail_address.required' => 'メールアドレスを入力してください。',
            'mail_address.email' => '有効なメールアドレスを入力してください。',
            'mail_address.unique' => 'このメールアドレスは既に使用されています。',
            'mail_address.max' => 'メールアドレスは255文字以内で入力してください。',

            'sex.required' => '性別を選択してください。',
            'sex.in' => '性別の選択が無効です。',

            'old_year.required' => '年を選択してください。',
            'old_month.required' => '月を選択してください。',
            'old_month.min' => '月は1以上でなければなりません。',
            'old_month.max' => '月は12以下でなければなりません。',
            'old_day.required' => '日を選択してください。',
            'old_day.min' => '日は1以上でなければなりません。',
            'old_day.max' => '日は31以下でなければなりません。',

            'role.required' => '役割を選択してください。',
            'role.in' => '役割の選択が無効です。',

            'password.required' => 'パスワードを入力してください。',
            'password.string' => 'パスワードは文字列である必要があります。',
            'password.min' => 'パスワードは8文字以上で入力してください。',
            'password.max' => 'パスワードは191文字以内で入力してください。',
            'password.confirmed' => '確認用パスワードと一致しません。',

            'password_confirmation.required' => '確認用パスワードを入力してください。',
            'password_confirmation.string' => '確認用パスワードは文字列でなければなりません。',
            'password_confirmation.min' => '確認用パスワードは8文字以上でなければなりません。',
            'password_confirmation.max' => '確認用パスワードは30文字以内でなければなりません。',
        ];
    }
}
