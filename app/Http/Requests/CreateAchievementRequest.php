<?php

namespace App\Http\Requests;

use App\Enums\AchievementGroupEnum;
use Illuminate\Foundation\Http\FormRequest;

class CreateAchievementRequest extends FormRequest
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
            'achievement_name' => 'required|string|max:50|min:2|unique:achievements,achievement_name',
            'achievement_group' => 'required|max:50|min:2|in:' . AchievementGroupEnum::PURCHASE . ',' . AchievementGroupEnum::COMMENT_MADE . ',' . AchievementGroupEnum::LESSON_WATCHED,
            'description' => 'nullable|string|max:255',
            'required_count' => 'required|integer|min:0'
        ];
    }

    public function messages()
    {
        return [
            'in' => 'The is not one of the acceptable options',
        ];
    }
}
