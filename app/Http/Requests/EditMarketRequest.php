<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditMarketRequest extends FormRequest
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
            'zip'=>'digits:10',
            'city'=>'required',
            'state'=>'required',
            'address'=>'required',
            'longitude'=>'required',
            'latitude'=>'required',
            'img1'=>'image',
            'img2'=>'image',
            'img3'=>'image',
            'logo'=>'image',
            'normal_percentage'=>'required',
            'marketsCategories'=>'required',
            //'contract_end'=>'required',
            // 'contract_start'=>'required',
        ];
    }
}
