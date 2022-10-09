<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'sei' => ['required','max:20'],
            'mei' => ['required','max:20'],
            'gender' => ['required'],
            'email' => ['required','email:strict','email:dns'],
            'postcode' => ['required','regex:/^[0-9]{3}-[0-9]{4}$/'],
            'adress' => ['required'],
            'opinion' => ['required','max:120']
        ];
    }
}
