<?php

use Illuminate\Support\Facades\Route;
use Todos\Controllers\TodoController;

Route::get('/todos', [TodoController::class, 'index']);
