<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsReq extends FormRequest
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
            'name' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is Required',
            'subject.required' => 'Subject is Required',
            'message.required' => 'Message is Required',
            'email.required' => 'Email is Required',
            'email.email' => 'It must be an Email',
        ];
    }
}
