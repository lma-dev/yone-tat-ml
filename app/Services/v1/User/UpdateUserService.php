<?php

namespace App\Services\v1\User;

use App\Helpers\ResponseHelper;
use App\Interfaces\User\UserInterface;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class UpdateUserService
{
    public function __invoke(UserInterface $userRepository, array $formData, User $user): JsonResponse
    {
        $userRepository->updateUser($formData, $user);
        return ResponseHelper::success('User updated successfully', null, Response::HTTP_OK);
    }
}
