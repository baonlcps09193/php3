<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RqNhapSV extends FormRequest
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
            'dienthoai' => 'required|numeric|max:9999999999|regex:/^0[0-9]{9}$/',
        ];
    }

    public function messages() {
        return [
            'masv.required' => 'Vui lòng nhập :attribute',
            'masv.regex' => ':attribute không chính xác',
            'hoten.required' => 'Vui lòng nhập :attribute',
            'hoten.min' => ':attribute quá ngắn',
            'hoten.max' => ':attribute quá dài',
            'tuoi.integer' => ':attribute phải là số',
            'tuoi.required' => 'Vui lòng nhập :attribute',
            'tuoi.min' => ':attribute quá nhỏ, phải > 16',
            'tuoi.max' => ':attribute quá lớn, phải < 100',
            'cmnd.digits_between' => ':attribute nhập 9 hoặc 10 số',
            'ngaysinh.required' => 'Vui lòng nhập :attribute',
            'ngaysinh.regex' => ':attribute không hợp lệ',
            'email.email' => ':attribute không hợp lệ',
            'email.ends_with' => ':attribute phải là email trường fpt',
            'dienthoai.required' => ':attribute là bắt buộc',
            'dienthoai.numeric' => ':attribute phải là số',
            'dienthoai.max' => ':attribute quá dài, chỉ cần 10 số',
            'dienthoai.regex' => ':attribute không đúng chuẩn của Việt Nam',
        ];
    }

    public function attributes() {
        return [
            'masv' => 'mã số sinh viên',
            'ngaysinh' => 'ngày sinh',
            'hoten' => 'họ tên',
            'tuoi' => 'tuổi',
            'cmnd' => 'số chứng minh nhân dân',
            'email' => 'Địa chỉ email',
            'dienthoai' => 'Số điện thoại',
        ];
    }
}
