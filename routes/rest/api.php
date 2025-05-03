<?php

use ContinueWithGoogle\App\Http\Controllers\UserController;
use ContinueWithGoogle\WpMVC\Routing\Route;

Route::get( 'user', [UserController::class, 'index'], ['admin'] );