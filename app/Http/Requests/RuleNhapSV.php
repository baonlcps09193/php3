<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
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
            'masv' => 'required|regex:/^PS\d{5}/',
            'hoten' => 'required|min:3|max:20',
            'tuoi' => 'required|integer|min:16|max:100',
            'ngaysinh' => 'required|regex:/\d{1,2}\/\d{1,2}\/\d{4}/',
            'cmnd' => 'digits_between:9,10',
            'email' => 'email|ends_with:@fpt.edu.vn',
        ];
    }
}
