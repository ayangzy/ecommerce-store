<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Models\User;
use App\Models\Badge;
use App\Models\Achievement;
use App\Events\BadgeUnlocked;
use App\Enums\AchievementGroupEnum;
use App\Events\AchievementUnlocked;
use Illuminate\Support\Facades\Event;
use App\Services\EventUnlockingService;

class EventUnlockingServiceTest extends TestCase
{
    public function test_check_achievement_with_matching_achievement()
    {

        $user = User::factory()->create();

        $requiredCount = $user->purchases->count();
        $achievementGroup = AchievementGroupEnum::PURCHASE;
        $achievement = Achievement::factory()->create([
            'required_count' => $requiredCount,
            'achievement_group' => $achievementGroup,
        ]);

        $eventService = new EventUnlockingService();

        Event::fake();
        $eventService->checkAchievement($user, $achievementGroup);
        Event::assertDispatched(AchievementUnlocked::class, function ($event) use ($achievement, $user) {
            return $event->achievementName === $achievement->achievement_name && $event->user->id === $user->id;
        });
    }

    public function test_check_achievement_without_matching_achievement()
    {

        $user = User::factory()->create();

        $requiredCount = $user->purchases->count() + 1;
        $achievementGroup = AchievementGroupEnum::PURCHASE;
        Achievement::factory()->create([
            'required_count' => $requiredCount,
            'achievement_group' => $achievementGroup,
        ]);

        $eventService = new EventUnlockingService();

        Event::fake();
        $achievement = $eventService->checkAchievement($user, $achievementGroup);
        Event::assertNotDispatched(AchievementUnlocked::class);
        $this->assertNull($achievement);
    }

    public function test_check_badge_with_matching_badge()
    {

        $user = User::factory()->create();

        $achievementCount = $user->achievements->count();
        $badge = Badge::factory()->create([
            'required_number_of_achievements' => $achievementCount,
        ]);

        $eventService = new EventUnlockingService();

        Event::fake();
        $eventService->checkBadge($user);
        Event::assertDispatched(BadgeUnlocked::class, function ($event) use ($badge, $user) {
            return $event->badgeName === $badge->badge_name && $event->user->id === $user->id;
        });
    }

    public function test_check_badge_without_matching_badge()
    {

        $user = User::factory()->create();

        $achievementCount = $user->achievements->count() +  1;
        Badge::factory()->create([
            'required_number_of_achievements' => $achievementCount + 1,
        ]);
        $eventService = new EventUnlockingService();

        Event::fake();
        $nextBadge = $eventService->checkBadge($user);
        Event::assertNotDispatched(BadgeUnlocked::class);
        $this->assertNull($nextBadge);
    }
}
