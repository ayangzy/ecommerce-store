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
                "achievement_name" => "5 Purchases",
                "description" => "Unlock after 5 total purchases",
                "achievement_group" => AchievementGroupEnum::PURCHASE,
                "required_count" => 5,
            ],

            [
                "achievement_name" => "5 Lessons Watched",
                "description" => "Unlock after total of 5 watched lessons",
                "achievement_group" => AchievementGroupEnum::LESSON_WATCHED,
                "required_count" => 5,
            ],

            [
                "achievement_name" => "10 Lessons Watched",
                "description" => "Unlock after total of 10 watched lessons",
                "achievement_group" => AchievementGroupEnum::LESSON_WATCHED,
                "required_count" => 10,
            ],


            [
                "achievement_name" => "3 Comments Written",
                "description" => "Unlock after total of 3 comments made",
                "achievement_group" => AchievementGroupEnum::COMMENT_MADE,
                "required_count" => 3,
            ],

            [
                "achievement_name" => "First Comment Written",
                "description" => "Unlock after first comment made",
                "achievement_group" => AchievementGroupEnum::COMMENT_MADE,
                "required_count" => 1,
            ]
        ];

        foreach ($achievements as $achievement) {
            Achievement::firstOrCreate($achievement);
        }
    }
}
