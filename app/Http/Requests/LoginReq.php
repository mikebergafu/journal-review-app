<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginReq extends FormRequest
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
            'password' => 'required|min:6',
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters',
            'email.required' => 'Email address is required',
            'email.email' => 'A valid email address is required '
        ];
    }
}
