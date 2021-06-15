<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string',
            'price' => 'required|numeric|gt:0',
            'currency_id' => 'required|exists:currencies,id',
            'expired_at' => 'required|date_format:Y-m-d'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        response()->json($validator->errors())->throwResponse();
    }
}
