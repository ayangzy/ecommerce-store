<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    public function test_registration_success()
    {
        $requestData = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'phone_number' => '090678593873',
            'email' => 'johndoe@example.com',
            'password' => 'password123',
        ];

        $response = $this->postJson('/api/v1/auth/register', $requestData);

        $response->assertStatus(201)
            ->assertJson([
                'statusCode' => 201,
                'statusText' => 'created',
                'message' => 'User registered successfully',
                'data' => [
                    'id' => $response['data']['id'],
                    'first_name' => $requestData['first_name'],
                    'last_name' =>  $requestData['last_name'],
                    'phone_number' =>  $requestData['phone_number'],
                    'email' =>  $requestData['email'],
                ],
            ]);
    }
}
