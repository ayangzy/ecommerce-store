<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BankDetail extends Model
{
    use HasFactory;

    protected $guarded = [];


    public static function generateCashBackRef()
    {
        $ref = 'cashback_' . uniqid();

        $validator = Validator::make(['reference' => $ref], ['reference' => 'unique:bank_details,reference']);

        if ($validator->fails()) {
            return self::generateCashBackRef();
        }

        return $ref;
    }
}
