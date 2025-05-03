<?php

use ContinueWithGoogle\App\Http\Controllers\UserController;
use ContinueWithGoogle\WpMVC\Routing\Ajax;

Ajax::get( 'user/{id}', [UserController::class, 'index'], ['admin'] );
