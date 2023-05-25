<?php

namespace App\Listeners;

use App\Events\AchievementUnlocked;
use Illuminate\Support\Facades\Mail;
use App\Mail\AchievementUnlockedMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandleAchievementUnlocked implements ShouldQueue
{

    public function handle(AchievementUnlocked $event): void
    {

        $achievementName = $event->achievementName;
        $user = $event->user;

        $data = [
            'achievement_name' => $achievementName,
            'user' => $user,
        ];

        Mail::to($user->email)->send(new AchievementUnlockedMail($data));
    }
}
