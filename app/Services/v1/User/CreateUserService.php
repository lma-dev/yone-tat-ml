<?php

namespace App\Services\v1\User;

use App\Helpers\ResponseHelper;
use App\Http\Resources\v1\User\UserResource;
use App\Interfaces\User\UserInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CreateUserService
{
    public function __invoke(UserInterface $userRepository, array $data): JsonResponse
    {

        $user = $userRepository->createUser($data);
        return ResponseHelper::success('User created successfully', new UserResource($user), Response::HTTP_CREATED);
    }
}
