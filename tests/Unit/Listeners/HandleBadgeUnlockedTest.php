<?php

namespace Tests\Unit\Listeners;

use Mockery;
use Tests\TestCase;
use App\Models\User;
use App\Models\BankDetail;
use Mockery\MockInterface;
use App\Events\BadgeUnlocked;
use App\Mail\BadgeUnlockedMail;
use App\Services\CashBackService;
use Illuminate\Support\Facades\Mail;
use App\Listeners\HandleBadgeUnlocked;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HandleBadgeUnlockedTest extends TestCase
{
    public function test_handle_badge_unlocked_test()
    {

        Mail::fake();

        $user = User::factory()->create();

        $bankDetail = BankDetail::factory()->create([
            'user_id' => $user->id,
        ]);

        $cashBackServiceMock = $this->instance(
            CashBackService::class,
            Mockery::mock(CashBackService::class, function (MockInterface $mock) use ($user) {
                $mock->shouldReceive('processCashback')->with($user);
            })
        );


        $listener = new HandleBadgeUnlocked();

        $event = new BadgeUnlocked('Test Badge', $user);

        $listener->handle($event);

        $cashBackServiceMock->processCashback($user);

        Mail::assertSent(BadgeUnlockedMail::class, function ($mail) use ($user) {
            return $mail->hasTo($user->email);
        });
    }
}
