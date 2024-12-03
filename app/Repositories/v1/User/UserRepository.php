<?php

namespace App\Repositories\v1\User;

use App\Interfaces\User\UserInterface;
use App\Models\User;
use Illuminate\Support\Collection;

class UserRepository implements UserInterface
{
    public function getAllUsers(): Collection
    {
        return User::all();
    }

    public function getUser(int $id): User
    {
        return User::findOrFail($id);
    }

    public function createUser(array $data): User
    {
        return User::create($data);
    }

    public function updateUser(array $userData, User $user): bool
    {
        return $user->update($userData);
    }

    public function deleteUser(User $user): ?bool
    {
        return $user->delete();
    }
}
