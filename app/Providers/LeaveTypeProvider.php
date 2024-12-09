<?php

namespace App\Providers;

use App\Interfaces\LeaveType\LeaveTypeInterface;
use App\Repositories\v1\LeaveType\LeaveTypeRepository;
use Illuminate\Support\ServiceProvider;

class LeaveTypeProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            LeaveTypeInterface::class,
            LeaveTypeRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
