<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => 'required|string|max:100|min:2',
            'last_name' => 'required|string|max:100|min:2',
            'phone_number' => "required|string|max:15|min:11",
            'address' => 'nullable',
            'email' => 'required|string|unique:users,email',
            'country_id' => 'nullable|exists:countries,id',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'country_id.exists' => 'The selected counry is invalid'
        ];
    }
}
