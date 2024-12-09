<?php

namespace App\Providers;

use App\Interfaces\Attendance\AttendanceInterface;
use App\Repositories\v1\Attendance\AttendanceRepository;
use Illuminate\Support\ServiceProvider;

class AttendanceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            AttendanceInterface::class,
            AttendanceRepository::class
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
