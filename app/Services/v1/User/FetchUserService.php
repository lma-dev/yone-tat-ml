<?php

namespace App\Services\v1\User;

use App\Http\Resources\v1\User\UserResource;
use App\Interfaces\User\UserInterface;
use Illuminate\Http\JsonResponse;

class FetchUserService
{
    public function __invoke(UserInterface $userRepository): JsonResponse
    {
        $users = $userRepository->getAllUsers();
        return response()->json([
            'data' => UserResource::collection($users)
        ]);
    }
}
