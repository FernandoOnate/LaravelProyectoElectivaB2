<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarios\usersController;

Route::get('', [usersController::class, 'index']);
