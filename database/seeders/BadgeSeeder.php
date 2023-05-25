<?php

namespace Database\Seeders;

use App\Models\Badge;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $badges = [
            [
                "badge_name" => "Beginner",
                "description" => "Earned after unlocking 3 achievements",
                "required_number_of_achievements" => 1,
            ],

            [
                "badge_name" => "Intermediate",
                "description" => "Earned after unlocking 4 achievements",
                "required_number_of_achievements" => 5,
            ],

            [
                "badge_name" => "Advanced",
                "description" => "Earned by unlocking a total of 8 achievements.",
                "required_number_of_achievements" => 8,
            ]
        ];

        foreach ($badges as $badge) {
            Badge::firstOrCreate($badge);
        }
    }
}
