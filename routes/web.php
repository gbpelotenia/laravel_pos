<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect('/customers');
});

Route::get('/customers', [CustomerController::class, 'index'])
    ->name('customers.index');

Route::get('/users', [UserController::class, 'index'])
    ->name('users.index');