<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'first_name'=>'required',
            'last_name'=>'required',
            'social_security_number'=>'required|digits:10|unique:users,social_security_number',
            'education'=>'nullable',
            'occupation'=>'nullable',
            'state'=>'required',
            'city'=>'required',
            'address'=>'required',
            'zip'=>'nullable|unique:users,zip|digits:10',
            'home_tel'=>'nullable|digits:11',
            'work_tel'=>'nullable|digits:11',
            'emergency_tel'=>'nullable|digits:11',
            'cell_1'=>'required|digits:11|unique:users,cell_1',
            'cell_2'=>'nullable|digits:11|unique:users,cell_2',
            'email'=>'nullable|email|unique:users,email',
            'bank_name'=>'required',
            'bank_card_number'=>'required|digits:16|unique:users,bank_card_number',
            'bank_account_number'=>'required|numeric|unique:users,bank_account_number',
            'zhenic_card_number'=>'required|numeric|unique:users,zhenic_card_number',
            'marketer'=>'nullable|numeric',
            'acquainted_by'=>'nullable',
            'password'=>'required|min:6|confirmed',
            'password_confirmation'=>'required|min:6',
            'categories'=>'nullable',
            'description'=>'nullable',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'وارد کردن نام اجباری است',
            'last_name.required'  => 'وارد کردن نام خانوادگی اجباری است',
            'social_security_number.required' => 'وارد کردن کد ملی اجباری است',
            'social_security_number.unique' => 'کد ملی وارد شده قبلا در سیستم ثبت شده است',
            'social_security_number.digits' => 'کد ملی باید ده رقم باشد',
            'state.required' => 'وارد کردن استان اجباری است',
            'city.required' => 'وارد کردن شهر اجباری است',
            'address.required' => 'وارد کردن آدرس اجباری است',
            'zip.unique' => 'کد پستی وارد شده قبلا در سیستم ثبت شده است',
            'zip.digits' => 'کد پستی باید ده رقم باشد',
            'home_tel.digits' => 'تلفن منزل باید یازده رقم باشد',
            'work_tel.digits' => 'تلفن محل کار باید یازده رقم باشد',
            'emergency_tel.digits' => 'تلفن ضروری باید یازده رقم باشد',
            'cell_1.required' => 'وارد کردن شماره موبایل 1 الزامی است',
            'cell_1.digits' => 'شماره موبایل 1 باید یازده رقم باشد',
            'cell_1.unique' => 'شماره موبایل 1 وارد شده قبلا در سیستم ثبت شده است',
            'cell_2.digits' => 'شماره موبایل 2 باید یازده رقم باشد',
            'cell_2.unique' => 'شماره موبایل 2 وارد شده قبلا در سیستم ثبت شده است',
            'email.required' => 'وارد کردن ایمیل اجباری است',
            'email.email' => 'ایمیل وارد شده نامعتبر است',
            'email.unique' => 'ایمیل وارد شده قبل در سیستم ثبت شده است',
            'bank_name.required' => 'وارد کردن نام بانک اجباری است',
            'bank_card_number.required' => 'وارد کردن شماره کارت بانکی اجباری است',
            'bank_card_number.digits' => 'شماره کارت بانکی وارد شده باید شانزده رقم باشد',
            'bank_card_number.unique' => 'شماره کارت بانکی وارد شده قبلا در سیستم ثبت شده است',
            'bank_account_number.required' => 'وارد کردن شماره حساب اجباری است',
            'bank_account_number.numeric' => 'شماره حساب وارد شده باید رقم باشد',
            'bank_account_number.unique' => 'شماره حساب وارد شده قبلا در سیستم ثبت شده است',
            'zhenic_card_number.required' => 'وارد کردن شماره ژنیک کارت اجباری است',
            'zhenic_card_number.numeric' => 'شماره ژنیک کارت وارد شده باید رقم باشد',
            'zhenic_card_number.unique' => 'شماره ژنیک کارت وارد شده قبلا در سیستم ثبت شده است',
            'marketer.numeric' => 'باید کد بازاریاب وارد شود',
            'password.required' => 'وارد کردن رمز عبور اجباری است',
            'password.min' => 'رمز عبور باید حداقل شش رقم باشد',
            'password.confirmed' => 'رمز عبور وارد شده با تأیید رمز عبور همخوانی ندارد',
            'password_confirmation.required' => 'وارد کردن تأیید رمز عبور اجباری است',
        ];
    }
}
