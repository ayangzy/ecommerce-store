<?php

namespace App\Services;

use App\Models\User;
use App\Models\Badge;
use App\Models\Achievement;
use App\Events\BadgeUnlocked;
use App\Enums\AchievementGroupEnum;
use App\Events\AchievementUnlocked;
use App\Interfaces\EventUnlockingInterface;

class EventUnlockingService implements EventUnlockingInterface
{
    public function checkAchievement(User $user, string $achievementGroup)
    {
        $requiredCount = 0;

        if ($achievementGroup == AchievementGroupEnum::PURCHASE) {

            $requiredCount = $user->purchases->count();
        }


        $achievement = Achievement::where([
            'required_count' => $requiredCount,
            'achievement_group' => $achievementGroup
        ])->first();

        if (!$achievement == null) {
            $this->unlockAchievement($user, $achievement);
        }

        return $achievement;
    }


    private function unlockAchievement(User $user, Achievement $achievement)
    {

        $user->achievements()->attach($achievement->id);

        event(new AchievementUnlocked($achievement->achievement_name, $user));
    }


    public function checkBadge(User $user)
    {
        $achievementCount = $user->achievements->count();

        $nextBadge = Badge::where('required_number_of_achievements', $achievementCount)->first();

        if ($nextBadge) {
            $this->unlockBadge($user, $nextBadge);
        }

        return $nextBadge;
    }


    private function unlockBadge(User $user, Badge $badge)
    {
        if (!$user->badges()->where('badges.id', $badge->id)->exists()) {
            $user->badges()->attach($badge->id);
            event(new BadgeUnlocked($badge->badge_name, $user));
        }
    }
}
