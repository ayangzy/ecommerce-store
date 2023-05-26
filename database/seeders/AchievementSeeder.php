<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;
use App\Enums\AchievementGroupEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $achievements = [
            [
                "achievement_name" => "First Purchase",
                "description" => "Unlock on the first purchase",
                "achievement_group" => AchievementGroupEnum::PURCHASE,
                "required_count" => 1,
            ],

            [
                "achievement_name" => "2 Purchases",
                "description" => "Unlock after total of 2 purchases",
                "achievement_group" => AchievementGroupEnum::PURCHASE,
                "required_count" => 2,
            ],

            [
                "achievement_name" => "3 Purchases",
                "description" => "Unlock after total of 3 purchases",
                "achievement_group" => AchievementGroupEnum::PURCHASE,
                "required_count" => 3,
            ],


            [
                "achievement_name" => "5 Purchases",
                "description" => "Unlock after 5 total purchases",
                "achievement_group" => AchievementGroupEnum::PURCHASE,
                "required_count" => 5,
            ],

            [
                "achievement_name" => "6 Purchases",
                "description" => "Unlock after 6 total purchases",
                "achievement_group" => AchievementGroupEnum::PURCHASE,
                "required_count" => 6,
            ],


        ];

        foreach ($achievements as $achievement) {
            Achievement::firstOrCreate($achievement);
        }
    }
}
