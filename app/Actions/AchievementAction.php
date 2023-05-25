<?php

namespace App\Actions;

use App\Models\User;
use App\Models\Badge;
use App\Models\Achievement;

class AchievementAction
{
    public function execute(User $user)
    {
        $unlockedAchievements = $user->achievements->pluck('achievement_name')->toArray();
        $nextAchievements = $this->getNextAvailableAchievements($unlockedAchievements);
        $currentBadge = $user->badges->last();
        $nextBadge = $this->getNextBadge($user);


        $response = [
            'unlocked_achievements' => $unlockedAchievements,
            'next_available_achievements' => $nextAchievements,
            'current_badge' => $currentBadge ? $currentBadge->badge_name : null,
            'next_badge' => $nextBadge ? $nextBadge->badge_name : null,
            'remaining_to_unlock_next_badge' => $nextBadge ? ($nextBadge->required_number_of_achievements - $user->achievements->count()) : 0,
        ];

        return $response;
    }


    private function getNextAvailableAchievements(array $unlockedAchievements)
    {
        $unlockedAchievements = Achievement::whereIn('achievement_name', $unlockedAchievements)
            ->pluck('required_count')->toArray();

        $nextAchievements = Achievement::whereNotIn('required_count', $unlockedAchievements)
            ->orderBy('required_count')->pluck('achievement_name')->toArray();

        return $nextAchievements;
    }

    private function getNextBadge(User $user)
    {
        $unlockedAchievements = $user->achievements->pluck('achievement_name')->toArray();

        $currentBadge = $user->badges->last();

        if ($currentBadge) {
            return Badge::whereNotIn('badge_name', $unlockedAchievements)
                ->where('required_number_of_achievements', '>', $currentBadge->required_number_of_achievements)
                ->orderBy('required_number_of_achievements')->firstOrFail();
        }
    }
}
