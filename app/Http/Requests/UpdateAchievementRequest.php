<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use App\Enums\AchievementGroupEnum;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAchievementRequest extends FormRequest
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
            'achievement_name' => ['filled', 'string', 'max:50', 'min:2', Rule::unique('achievements')->ignore($this->achievement)],
            'achievement_group' => 'required|max:50|min:2|in:' . AchievementGroupEnum::PURCHASE,
            'description' => 'nullable|string|max:255',
            'required_count' => 'filled|integer|min:0'
        ];
    }
}
