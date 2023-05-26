<?php

namespace App\Listeners;

use App\Events\BadgeUnlocked;
use App\Mail\BadgeUnlockedMail;
use App\Services\CashBackService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandleBadgeUnlocked implements ShouldQueue
{

    public function handle(BadgeUnlocked $event): void
    {
        $badgeName = $event->badgeName;
        $user = $event->user;

        $data = [
            'badge_name' => $badgeName,
            'user' => $user,
        ];

        (new CashBackService())->processCashback($user);

        Mail::to($user->email)->send(new BadgeUnlockedMail($data));
    }
}
