<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseForm extends FormRequest
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
            '_token' => 'required|string|max:75',
            'random_token' => 'required|string|max:11',
            'access' => 'required|string|max:15',
            'email' => 'required|email|confirmed|max:100',
            'username' => 'required|string|confirmed|max:35',
            'math_answer' => 'required|numeric|max:20',
            'confirm_tv' => 'required'
        ];
    }
}
