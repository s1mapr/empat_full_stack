<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\UserService;
use App\Traits\HttpResponseTrait;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use HttpResponseTrait;

    private UserService $userService;


    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->userService->createUser($request->only('name', 'email', 'password'));

        $token = $user->createToken('default')->plainTextToken;

        return $this->success(
            [
                'user' => $user,
                'token' => $token
            ],
        );
    }

    public function login(LoginRequest $request)
    {
        $user = $this->userService->getUserByEmail($request['email']);
        if (!$user) {
            return $this->error('', 'No user with such email', 401);
        }
        if (!Hash::check($request['password'], $user->password)) {
            return $this->error('', 'Credentials not match', 401);
        }
        $token = $user->createToken('default')->plainTextToken;
        return $this->success([
            'user' => $user,
            'token' => $token
        ]);
    }


}
