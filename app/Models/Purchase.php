<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Purchase extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function generateRef()
    {
        $ref = 'purchase_' . uniqid();

        $validator = Validator::make(['ref' => $ref], ['ref' => 'unique:purchases,ref']);

        if ($validator->fails()) {
            return self::generateRef();
        }

        return $ref;
    }
}
