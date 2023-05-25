<?php

namespace App\Interfaces;

use App\Models\User;


interface EventUnlockingInterface
{
    public function checkAchievement(User $user, string $achievementGroup);

    public function checkBadge(User $user);
}
