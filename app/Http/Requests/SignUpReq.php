<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpReq extends FormRequest
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
            'title' => 'required|integer',
            'gender' => 'required|integer',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'other_name' => 'nullable|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please select a title',
            'gender.required' => 'Please select a gender/sex',
            'first_name.required' => 'First Name is Required',
            'last_name.required' => 'Last Name is required',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters',
            'password.confirmed' => 'Repeat Password does not match',
            'email.required' => 'Email address is required',
            'email.email' => 'A valid email address is required ',
            'email.unique' => 'This email is already signed up',
        ];
    }
}
