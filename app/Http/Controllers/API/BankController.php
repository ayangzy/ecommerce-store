<?php

namespace App\Http\Controllers\API;

use App\Models\BankDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\PaystackPaymentService;
use App\Http\Requests\CreateBankDetailRequest;

class BankController extends Controller
{
    private $paystackPaymentService;

    public function __construct(PaystackPaymentService $paystackPaymentService)
    {
        $this->paystackPaymentService = $paystackPaymentService;
    }


    public function getBank()
    {
        return $this->paystackPaymentService->banks();
    }

    public function addBankDetail(CreateBankDetailRequest $request)
    {
        $response = $this->paystackPaymentService->createRecipient($request);

        $recipient = $this->saveBankDetail($response);

        return $this->createdResponse("Account details added successfully", $recipient);
    }


    private function saveBankDetail($response)
    {
        return BankDetail::create([
            'user_id' => Auth::id(),
            'account_name' => $response['data']['details']['account_name'],
            'account_number' => $response['data']['details']['account_number'],
            'bank_name' => $response['data']['details']['bank_name'],
            'bank_code' => $response['data']['details']['bank_code'],
            'recipient_code' => $response['data']['recipient_code'],
            'type' => $response['data']['type'],
            'currency' => $response['data']['currency']
        ]);
    }
}
