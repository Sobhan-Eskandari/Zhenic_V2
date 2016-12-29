<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class marketRequest extends FormRequest
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
            'market_name'=>'required',
            'zip'=>'nullable|digits:10|unique:markets,zip',
            'city'=>'required',
            'state'=>'required',
            'address'=>'required',
            'longitude'=>'required',
            'market_tel'=>'required|digits:11',
            'latitude'=>'required',
            'img1'=>'nullable|image',
            'img2'=>'nullable|image',
            'img3'=>'nullable|image',
            'logo'=>'nullable|image',
            'normal_percentage'=>'required',
            'marketsCategories'=>'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'market_name.required' => 'وارد کردن نام فروشگاه اجباری است',
            'state.required' => 'وارد کردن استان اجباری است',
            'city.required' => 'وارد کردن شهر اجباری است',
            'address.required' => 'وارد کردن آدرس اجباری است',
            'zip.unique' => 'کد پستی وارد شده قبلا در سیستم ثبت شده است',
            'zip.digits' => 'کد پستی باید ده رقم باشد',
            'longitude.required' => 'وارد کردن طول جغرافیایی اجباری است',
            'latitude.required' => 'وارد کردن عرض جغرافیایی اجباری است',
            'market_tel.digits' => 'شماره تلفن فروشگاه باید یازده رقم باشد',
            'market_tel.required' => 'وارد کردن شماره تلفن فروشگاه اجباری است',
            'img1.image' => 'فایل شماره 1 تصویر نیست',
            'img2.image' => 'فایل شماره 2 تصویر نیست',
            'img3.image' => 'فایل شماره 3 تصویر نیست',
            'logo.image' => 'فایل مربوط به لوگو تصویر نیست',
            'normal_percentage.required' => 'وارد کردن درصد تخفیف اجباری است',
            'marketsCategories.required' => 'وارد کردن دسته بندی فروشگاه اجباری است',
            'market_type.required' => 'وارد کردن نوع فروشگاه اجباری است',
            'contract_end.required' => 'وارد کردن تاریخ پایان قرارداد اجباری است',
            'contract_start.required' => 'وارد کردن تاریخ شروع قرارداد اجباری است',
        ];
    }
}
