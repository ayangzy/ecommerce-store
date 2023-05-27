<?php

namespace Tests\Unit\Listeners;

use Tests\TestCase;
use App\Models\User;
use Mockery\MockInterface;
use App\Events\AchievementUnlocked;
use Illuminate\Support\Facades\Mail;
use App\Mail\AchievementUnlockedMail;
use App\Listeners\HandleAchievementUnlocked;
use Illuminate\Foundation\Testing\RefreshDatabase;


class HandleAchievementUnlockedTest extends TestCase
{
    public function test_handle_achievement_unlocked()
    {
        Mail::fake();

        $user = User::factory()->create();

        $event = new AchievementUnlocked('Test Achievement', $user);

        $listener = new HandleAchievementUnlocked();

        $listener->handle($event);

        Mail::assertSent(AchievementUnlockedMail::class, function ($mail) use ($user) {
            return $mail->hasTo($user->email);
        });
    }
}
