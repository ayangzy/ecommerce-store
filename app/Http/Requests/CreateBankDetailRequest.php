<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBankDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'account_number' => 'required|string|max:11|unique:bank_details,account_number',
            'account_name' => 'required|string|max:50|min:3',
            'bank_code' => 'required|string',
            'bank_name' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'account_number.unique' => "Account number already added"
        ];
    }
}
