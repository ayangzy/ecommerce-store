<?php

namespace App\Actions;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use App\Traits\GenerateAuthAccessCredentials;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class LoginAction
{
    use GenerateAuthAccessCredentials;

    public function execute(LoginRequest $request)
    {
        $user = $this->getAuthenticatedUser($request);

        [$accessToken, $expiresAt] = $this->generateAccessCredentialsFor($user);

        $data = [
            "status" => "success",
            'token' => $accessToken,
            'expires_at' => $expiresAt,
            'user' => new UserResource($user),
        ];

        return $data;
    }



    private function getAuthenticatedUser(LoginRequest $request): ?User
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw new BadRequestException('The provided credentials are incorrect.');
        }

        return $user;
    }
}
