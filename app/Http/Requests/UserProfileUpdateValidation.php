<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileUpdateValidation extends FormRequest
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
        $rules = [
            'name' => [
                'required',
                'string',
            ],
            'email' => [
                'required',
                'string',
            ], 'avatar' => [
                'nullable',
                'mimes:jpg,png,jpeg|max:5048',

            ],
        ];

        return $rules;
    }

    public function messages()
    {
        return [

            'name.required' => 'Het naam is verplicht',
            'email.required' => 'Het email is verplicht',

        ];
    }
}
