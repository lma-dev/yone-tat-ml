<?php

use App\Http\Controllers\v1\LeaveType\LeaveTypeController;
use App\Http\Controllers\v1\User\UserController;
use Illuminate\Support\Facades\Route;

Route::apiResource('users', UserController::class);
Route::apiResource('leave-types', LeaveTypeController::class);
