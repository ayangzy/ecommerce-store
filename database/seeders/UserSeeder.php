<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make("password");

        $users = [
            [
                "email" => "johndoe@gmail.com",
                "first_name" => "John",
                "last_name" => "Doe",
                "phone_number" => "+2343748038473",
                "address" => "expound the actual teachings of the great explorer of the truth",
                "password" => $password
            ],

            [
                "email" => "logicfatee@gmail.com",
                "first_name" => "Logic",
                "last_name" => "Fatee",
                "phone_number" => "+2343748038233",
                "address" => "expound the actual teachings of the great explorer of the truth",
                "password" => $password
            ]

        ];

        foreach ($users as $user) {
            User::firstOrCreate($user);
        }
    }
}
