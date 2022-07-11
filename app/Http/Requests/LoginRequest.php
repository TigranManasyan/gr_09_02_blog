<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function messages() {
        return [
            "email.required" => "Այս դածտը պարտադիր լրացման դաշտ է․",
            "email.email" => "Անվավեր էլ․ հասցե",
            "password.required" => "Այս դածտը պարտադիր լրացման դաշտ է․",
        ];
    }
}
