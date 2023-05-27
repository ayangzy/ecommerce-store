<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BankDetail>
 */
class BankDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id,
            'account_name' => fake()->name(),
            'account_number' => fake()->randomDigitNotZero() . fake()->numerify('##########'),
            'bank_name' => fake()->name,
            'bank_code' => fake()->randomDigitNotZero() . fake()->numerify('###'),
            'recipient_code' => fake()->randomDigitNotZero() . fake()->numerify('##########'),
            'reference' => fake()->randomDigitNotZero() . fake()->numerify('##########'),
            'currency' => 'NGN',
            'type' => 'nuben'
        ];
    }
}
