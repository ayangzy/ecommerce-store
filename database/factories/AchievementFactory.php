<?php

namespace Database\Factories;

use App\Enums\AchievementGroupEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Achievement>
 */
class AchievementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'achievement_name' => fake()->name(),
            'description' => fake()->sentence(),
            'achievement_group' => AchievementGroupEnum::PURCHASE,
            'required_count' => fake()->numberBetween(1, 5),
        ];
    }
}
