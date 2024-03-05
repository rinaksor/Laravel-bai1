<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
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
            'product_name' => 'required|min:6',
            'product_price' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            // 'product_name.required' => 'Truong :attribute bat buoc phai nhap',
            // 'product_name.min' => 'Truong :attribute khong duoc nho hon :min ky tu',
            // 'product_price.required' => 'Gia san pham bat buoc phai nhap',
            // 'product_price.integer' => 'Gia san pham phai la so'
            // 'product_name.required' => 'Truong :attribute san pham bat buoc phai nhap',
            'product_name.required' => ':attribute bat buoc phai nhap',
            'product_name.min' => ':attribute khong duoc nho hon :min ki tu',
            'product_price.required' => ':attribute bat buoc phai nhap',
            'product_price.integer' => ':attribute phai la so'
        ];
    }

    public function attributes()
    {
        return [
            'product_name' => 'Ten san pham',
            'product_price' => 'Gia san pham',
        ];
    }
}
