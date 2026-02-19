<?php

namespace App\Services\Api\V1\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function login(array $data): array
    {
        $user = User::where('email', $data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password)) {
            return [
                'status' => false,
                'message' => 'Invalid credentials'
            ];
        }

        $token = $user->createToken('admin_token')->plainTextToken;

        return [
            'status' => true,
            'message' => 'Login successful',
            'token' => $token,
            'user' => $user
        ];
    }
}
