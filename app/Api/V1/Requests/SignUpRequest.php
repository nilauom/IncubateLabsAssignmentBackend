<?php

namespace App\Api\V1\Requests;

use Config;
use Dingo\Api\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    public function rules()
    {
        return [
        'name' => 'required',
        'email'=>'required|email',
        'password'=>'required|confirmed'
        ];
    }
    public function messages()
    {
    return [
        'name.required' => 'A title is required',
        'email.required'  => 'A message is required',
        'password.required' => 'A password is required',
        'email.email'=>'Email is not valide',
    ];
    }
    public function authorize()
    {
        return true;
    }
}
