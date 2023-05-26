<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Actions\PurchaseAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\PurchaseRequest;
use App\Interfaces\EventUnlockingInterface;

class PurchaseController extends Controller
{
    public function store(PurchaseRequest $request, EventUnlockingInterface $eventService)
    {
        $purchase = (new PurchaseAction($eventService))->execute($request);

        return $this->createdResponse("Purchase successful", $purchase);
    }
}
