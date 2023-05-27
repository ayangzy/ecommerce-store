<?php

namespace App\Actions;

use Exception;
use App\Models\Purchase;
use Illuminate\Log\Logger;
use App\Enums\PurchaseStatusEnum;
use Illuminate\Support\Facades\DB;
use App\Enums\AchievementGroupEnum;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PurchaseRequest;
use App\Http\Resources\PurchaseResource;
use App\Interfaces\EventUnlockingInterface;

class PurchaseAction
{
    private $eventService;

    public function __construct(EventUnlockingInterface $eventService)
    {
        $this->eventService = $eventService;
    }

    public function execute(PurchaseRequest $request)
    {
        DB::beginTransaction();
        try {

            $user = Auth::user();

            $purchase = $this->createPurchase($user, $request);

            $this->eventService->checkAchievement($user, AchievementGroupEnum::PURCHASE);

            $this->eventService->checkBadge($user);

            DB::commit();

            return new PurchaseResource($purchase);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);
            throw new Exception("An error occured processing your request, please try again");
        }
    }

    //Mocking purchase
    private function createPurchase($user, $request)
    {
        return Purchase::create([
            'user_id' => $user->id,
            'amount' => $request->amount,
            'status' => PurchaseStatusEnum::SUCCESSFUL,
            'ref' => Purchase::generateRef()
        ]);
    }
}
