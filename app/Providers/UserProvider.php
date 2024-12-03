<?php

namespace App\Providers;

use App\Interfaces\User\UserInterface;
use App\Repositories\v1\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class UserProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            UserInterface::class,
            UserRepository::class
        );
    }
}
