<?php

namespace App\Services\v1\User;

use App\Interfaces\User\UserInterface;

class FetchUserService
{
    public function __invoke(UserInterface $userRepository)
    {
        return $userRepository->getAllUsers();
    }
}
