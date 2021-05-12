<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginBRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'email.required'=>'Không được để trống email',
            'email.email'=>'Không đúng định dạng email',
            'password.required'=>'Không được để trống password',
            'password.min '=>'Không đúng định dạng email',
           

    ];
        
    }
}
