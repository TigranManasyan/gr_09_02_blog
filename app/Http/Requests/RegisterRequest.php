<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'avatar' => 'required|file|mimes:jpg,jpeg,png',
            'birth_date' => 'date',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
        ];
    }

    public function messages() {
        return [
            "name.required" => "Այս դածտը պարտադիր լրացման դաշտ է․",
            "avatar.required" => "Այս դածտը պարտադիր լրացման դաշտ է․",
            "avatar.file" => "Ընտրեք ֆայլ",
            "avatar.mimes" => "Ֆայլը պետք է լինի jpg,jpeg կամ png ֆորմատով․",
            "birth_date.date" => "Մուտքագրեք ամսաթիվ",
            "email.required" => "Այս դածտը պարտադիր լրացման դաշտ է․",
            "email.email" => "Անվավեր էլ․ հասցե",
            "email.unique" => "Պրոֆիլը գոյություն ունի․",
            "password.required" => "Այս դածտը պարտադիր լրացման դաշտ է․",
            "password.min" => "Ծածկագրի նիշերի մինիմում քանակը 4 է",
        ];
    }
}
