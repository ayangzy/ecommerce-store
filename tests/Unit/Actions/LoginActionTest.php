<?php

namespace Tests\Unit\Actions;

use Tests\TestCase;
use App\Models\User;
use App\Actions\LoginAction;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;


class LoginActionTest extends TestCase
{
    /** @test */
    public function login_success()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        $loginRequest = new LoginRequest([
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $loginAction = new LoginAction();
        $result = $loginAction->execute($loginRequest);

        $this->assertArrayHasKey('status', $result);
        $this->assertEquals('success', $result['status']);
        $this->assertArrayHasKey('token', $result);
        $this->assertArrayHasKey('expires_at', $result);
        $this->assertArrayHasKey('user', $result);
    }

    /** @test */
    public function login_failure()
    {
        User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        $loginRequest = new LoginRequest([
            'email' => 'test@example.com',
            'password' => 'wrong_password',
        ]);

        $loginAction = new LoginAction();

        $this->expectException(BadRequestException::class);
        $this->expectExceptionMessage('The provided credentials are incorrect.');

        $loginAction->execute($loginRequest);
    }
}
