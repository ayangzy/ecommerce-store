<?php

namespace Tests\Unit\Actions;

use Mockery;
use Tests\TestCase;
use App\Models\User;
use App\Models\Badge;
use App\Models\Achievement;
use App\Actions\AchievementAction;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AchievementActionTest extends TestCase
{

    public function test_execute_returns_correct_response()
    {
        Achievement::factory()->create([
            'achievement_name' => 'Achievement 1',
            'required_count' => 1,
        ]);

        Achievement::factory()->create([
            'achievement_name' => 'Achievement 2',
            'required_count' => 2,
        ]);

        Achievement::factory()->create([
            'achievement_name' => 'Achievement 3',
            'required_count' => 3,
        ]);

        Badge::factory()->create([
            'badge_name' => 'Badge 1',
            'required_number_of_achievements' => 3,
        ]);

        $user = User::factory()->create();
        $user->achievements()->attach(Achievement::where('achievement_name', 'Achievement 1')->first());
        $user->achievements()->attach(Achievement::where('achievement_name', 'Achievement 2')->first());

        $achievementAction = new AchievementAction();

        $response = $achievementAction->execute($user);

        $this->assertArrayHasKey('unlocked_achievements', $response);
        $this->assertArrayHasKey('next_available_achievements', $response);
        $this->assertArrayHasKey('current_badge', $response);
        $this->assertArrayHasKey('next_badge', $response);
        $this->assertArrayHasKey('remaining_to_unlock_next_badge', $response);


        $expectedUnlockedAchievements = ['Achievement 1', 'Achievement 2'];
        $this->assertEquals($expectedUnlockedAchievements, $response['unlocked_achievements']);


        $expectedNextAchievements = ['Achievement 3'];
        $this->assertEquals($expectedNextAchievements, $response['next_available_achievements']);


        $this->assertNull($response['current_badge']);


        $expectedNextBadge = null;
        $this->assertEquals($expectedNextBadge, $response['next_badge']);


        $expectedRemainingCount = 0;
        $this->assertEquals($expectedRemainingCount, $response['remaining_to_unlock_next_badge']);
    }
}
