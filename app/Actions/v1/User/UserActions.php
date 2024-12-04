<?php

namespace App\Actions\v1\User;

use App\Interfaces\User\UserInterface;
use App\Models\User;
use App\Services\v1\User\CreateUserService;
use App\Services\v1\User\DeleteUserService;
use App\Services\v1\User\FetchUserService;
use App\Services\v1\User\UpdateUserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

class UserActions
{
    private UserInterface $userRepository;

    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function fetchUsers(): Collection
    {
        return (new FetchUserService())($this->userRepository);
    }

    public function createUser(array $data): JsonResponse
    {
        return (new CreateUserService())($this->userRepository, $data);
    }

    public function updateUser(array $formData, User $user): JsonResponse
    {
        return (new UpdateUserService())($this->userRepository, $formData, $user);
    }

    public function deleteUser(User $user): JsonResponse
    {
        return (new DeleteUserService())($this->userRepository, $user);
    }
}
