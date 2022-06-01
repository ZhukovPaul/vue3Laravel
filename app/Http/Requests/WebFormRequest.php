<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WebFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    { 
        return [
            "email"=> "required",
            "phone"=> "required",
            "description"=> "required",
        ];
    }

    public function messages()
    {
        return [
            "email.required"=> "Can't be empty",
            "phone.required"=> "Can't be empty",
            "description.required"=> "Can't be empty",
        ];
    } 
}
