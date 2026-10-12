<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);

// Routing untuk members
Route::get('/members', [MemberController::class, 'index'])
->name('members.index');
Route::get('/members/{id}', [MemberController::class, 'show'])
->name('members.show');

// Routing untuk categories
Route::get('/categories', [CategoryController::class, 'index'])
->name('categories.index');

// Routing untuk dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
->name('dashboard');