<?php

    namespace App\Http\Requests;

    use Illuminate\Contracts\Validation\Validator;
    use Illuminate\Foundation\Http\FormRequest;
    use Yoeunes\Toastr\Facades\Toastr;

    class SubscribeReq extends FormRequest
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
                'email' => 'required|email|unique:subscriptions',
            ];
        }

        public function messages()
        {
            return [
                'email.required' => 'You need to subscribe with your Email address',
                'email.email' => 'It must be an Email',
                'email.unique' => 'You have already subscribed',
            ];
        }


        /**
         * Configure the validator instance.
         *
         * @param  \Illuminate\Validation\Validator  $validator
         * @return void
         */
        public function withValidator($validator)
        {
            $validator->after(function ($validator) {
                $messages = $validator->messages();
                foreach ($messages->all() as $message) {
                    Toastr::error($message, 'Failed', ['timeOut' => 10000]);
                }
            });
            return;
        }

    }
