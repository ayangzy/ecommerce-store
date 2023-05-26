<?php

namespace App\Services;

use Exception;

use Illuminate\Http\Request;
use App\Interfaces\PaymentInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class PaystackPaymentService implements PaymentInterface
{

    private function baseUri()
    {
        return config('paystack.baseUrl');
    }


    public function banks()
    {
        $url = $this->baseUri() . 'bank';
        $secret_key = config('paystack.secretKey');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $secret_key,
            'Content-Type' => 'application/json',
            'Cache-Control' => 'no-cache',
        ])->get($url);


        if (json_decode($response)->status == false) {
            throw new BadRequestException(json_decode($response)->message);
        }

        return json_decode($response->body(), true);
    }


    public function createRecipient(Request $request)
    {
        $url = $this->baseUri() . 'transferrecipient';
        $secret_key = config('paystack.secretKey');

        $data = [
            'name' => $request->account_name,
            'account_number' => $request->account_number,
            'bank_code' => $request->bank_code,
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $secret_key,
            'Content-Type' => 'application/json',
            'Cache-Control' => 'no-cache',
        ])->post($url, $data);

        if (json_decode($response)->status == false) {
            throw new BadRequestException(json_decode($response)->message);
        }

        return json_decode($response->body(), true);
    }


    public function initiateTransfer(int $amount, string $reference, string $recipient_code)
    {
        $url = $this->baseUri() . 'transfer';
        $secret_key = config('paystack.secretKey');

        $data = [
            'amount' => $amount * 100,
            'currency' => 'NGN',
            'reference' => $reference,
            'recipient' => $recipient_code,
            'reason' =>  'Cashback Reward',
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $secret_key,
            'Content-Type' => 'application/json',
            'Cache-Control' => 'no-cache',
        ])->post($url, $data);


        if (json_decode($response)->status == false) {
            throw new BadRequestException(json_decode($response)->message);
        }

        return json_decode($response->body(), true);
    }
}
