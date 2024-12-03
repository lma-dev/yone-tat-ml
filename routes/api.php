<?php

use App\Http\Controllers\v1\User\UserController;
use Illuminate\Support\Facades\Route;



Route::apiResource('users', UserController::class);
