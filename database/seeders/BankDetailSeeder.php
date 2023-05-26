<?php

namespace Database\Seeders;

use App\Models\BankDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userBankDetails = [
            [
                'user_id' => 1,
                'account_name' => 'John Doe',
                'account_number' => '1230081972',
                'bank_name' => 'First Bank of Nigeria',
                'recipient_code' => 'RCP_1a25w1h3n0xctjg',
                'currency' => 'NGN',
                'type' => 'nuben',
                'bank_code' => '011'
            ],

            [
                'user_id' => 2,
                'account_name' => 'Logic Fatee',
                'account_number' => '2930828001',
                'bank_name' => 'Access Bank',
                'recipient_code' => 'RCP_1a2ww1h3n0xctwj',
                'currency' => 'NGN',
                'type' => 'nuben',
                'bank_code' => '055'
            ],
        ];

        foreach ($userBankDetails as $accounts) {
            BankDetail::firstOrCreate($accounts);
        }
    }
}
