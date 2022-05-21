<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TermsForm extends FormRequest
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
            'purchase_id' => 'required|numeric',
            'agree_terms' => 'required'
        ];
    }
}
