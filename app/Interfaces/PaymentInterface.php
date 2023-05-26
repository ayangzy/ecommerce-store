<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface PaymentInterface
{

    public function banks();

    public function createRecipient(Request $request);

    public function initiateTransfer(int $amount, string $reference, string $recipient_code);
}
