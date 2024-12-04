<?php

namespace App\Http\Controllers\v1\User;

use App\Actions\v1\User\UserActions;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\User\StoreUserRequest;
use App\Http\Requests\v1\User\UpdateUserRequest;
use App\Http\Resources\v1\User\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    private UserActions  $userAction;

    public function __construct(UserActions $userAction)
    {
        $this->userAction = $userAction;
    }
    public function index()
    {
        return $this->userAction->fetchUsers();
    }

    public function show(User $user): JsonResponse
    {
        return response()->json([
            'data' => new UserResource($user),
        ]);
    }

    public function store(StoreUserRequest $request)
    {
        $formData = $request->safe()->all();
        return $this->userAction->createUser($formData);
    }

    public function update(UpdateUserRequest $request, User $user): JsonResponse
    {
        return $this->userAction->updateUser($request->safe()->all(), $user);
    }

    public function destroy(User $user)
    {
        return $this->userAction->deleteUser($user);
    }
}
