<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LogoutControllerTest extends TestCase
{
    public function test_logout()
    {

        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $response = $this->postJson('/api/v1/logout');

        $response->assertOk()
            ->assertJson([
                'message' => 'User logged out successfully.',
            ]);

        $this->assertCount(0, $user->tokens);
    }
}
