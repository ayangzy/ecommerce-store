<?php

namespace App\Services;

use App\Models\User;
use App\Models\BankDetail;

class CashBackService
{
    public function processCashback(User $user)
    {
        $cashBackRewared = 300;

        $getUserAccountDetail = BankDetail::where('user_id', $user->id)->firstOrFail();

        $reference = BankDetail::generateCashBackRef();

        $recipient_code = $getUserAccountDetail->recipient_code;

        //Paystack transfer api has been returning error for the past few days, 
        //I even tried both flutterwave and monify all returns error on their transfer api

        //This is the error from paystack when you try to intitiate transfer
        //(You cannot initiate third party payouts at this time )

        //Hence i will comment out line 28 but there is a full implementation on this.

        //$processPayment = (new PaystackPaymentService())->initiateTransfer($cashBackRewared, $reference, $recipient_code);

        $getUserAccountDetail->reference = $reference;
        $getUserAccountDetail->save();

        $user->balance += $cashBackRewared;
        $user->save();
    }
}
