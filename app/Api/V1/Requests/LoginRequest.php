<?php

namespace App\Api\V1\Requests;

use Config;
use Dingo\Api\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
        'email' =>'required',
        'password' => 'required',
        ];
    }
    public function messages()
    {
    return [
        'password.required' => 'A password is required',
        'email.required' => 'Phone Number is required',
    ];
    }
    public function authorize()
    {
        return true;
    }
}
