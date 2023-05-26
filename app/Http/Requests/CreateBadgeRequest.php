<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBadgeRequest extends FormRequest
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
            'badge_name' => 'required|string|max:50|min:2|unique:badges,badge_name',
            'description' => 'nullable|string|max:255',
            'required_number_of_achievements' => 'required|integer|min:0'
        ];
    }
}
