<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginControllerTest extends TestCase
{
    public function test_Login_success()
    {
        $user = User::factory()->create([
            'email' => 'example@test.com',
            'password' => bcrypt('password'),
        ]);

        $payload = [
            'email' => $user->email,
            'password' => "password",
        ];

        $response = $this->postJson('/api/v1/auth/login', $payload);

        $response->assertStatus(200);
        $response->assertSee('token');
    }
}
