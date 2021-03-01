<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RqNhapHS extends FormRequest
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
            'hoten' => ['required','min:3','max:20'],
            'tuoi' => 'required|integer|min:16|max:100',
            'ngaysinh' =>['required','date'],
        ];
    }

    public function messages() {
        return [
            'hoten.required' => 'Vui lòng nhập :attribute',
            'hoten.min' => ':attribute quá ngắn',
            'hoten.max' => ':attribute quá dài',
            'tuoi.integer' => ':attribute phải là số',
            'tuoi.required' => 'Vui lòng nhập :attribute',
            'tuoi.min' => ':attribute quá nhỏ, phải > 16',
            'tuoi.max' => ':attribute quá lớn, phải < 100',
            'ngaysinh.required' => 'Vui lòng nhập :attribute',
            'ngaysinh.date' => ':attribute không hợp lệ',
        ];
    }

    public function attributes() {
        return [
            'ngaysinh' => 'ngày sinh',
            'hoten' => 'họ tên',
            'tuoi' => 'tuổi',
        ];
    }
}
