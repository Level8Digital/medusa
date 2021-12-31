<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinalizePayPal extends FormRequest
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
            'purchase_id' => 'required|numeric|digits_between:1,10',
            'paypal_id' => 'required|string|max:100',
            'payment_amount' => 'required|numeric|digits_between:1,10'
        ];
    }
}
