<?php

namespace App\Services\v1\User;

use App\Helpers\ResponseHelper;
use App\Interfaces\User\UserInterface;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class DeleteUserService
{
    public function __invoke(UserInterface $userRepository, User $user): JsonResponse
    {
        $userRepository->deleteUser($user);
        return ResponseHelper::success('User deleted successfully', null, Response::HTTP_OK);
    }
}
