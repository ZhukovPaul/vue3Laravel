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
            'email' => 'required|unique:web_forms|max:255',
            'phone' => 'required',
            'describe' => 'required',
        ];
    }
}
