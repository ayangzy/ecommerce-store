<?php

namespace Tests\Unit\Actions;

use Mockery;
use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use App\Actions\PurchaseAction;
use App\Enums\PurchaseStatusEnum;
use App\Enums\AchievementGroupEnum;
use App\Http\Requests\PurchaseRequest;
use App\Http\Resources\PurchaseResource;
use App\Interfaces\EventUnlockingInterface;

class PurchaseActionTest extends TestCase
{
    public function test_execute_creates_purchase_and_returns_resource()
    {
        // Create a mocked instance of the EventUnlockingInterface
        /** @var \App\Interfaces\EventUnlockingInterface|\Mockery\MockInterface $eventService */

        $eventService = Mockery::mock(EventUnlockingInterface::class);
        $eventService->shouldReceive('checkAchievement')->once();
        $eventService->shouldReceive('checkBadge')->once();

        $user = User::factory()->create();

        $purchaseRequest = new PurchaseRequest();
        $purchaseRequest->amount = 100;

        $purchaseAction = new PurchaseAction($eventService);

        Sanctum::actingAs($user);

        $purchaseResource = $purchaseAction->execute($purchaseRequest);

        $this->assertInstanceOf(PurchaseResource::class, $purchaseResource);

        $this->assertDatabaseHas('purchases', [
            'user_id' => $user->id,
            'amount' => 100,
            'status' => PurchaseStatusEnum::SUCCESSFUL,
        ]);

        $eventService->shouldHaveReceived('checkAchievement')->with($user, AchievementGroupEnum::PURCHASE);

        $eventService->shouldHaveReceived('checkBadge');
    }
}
