
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

// Routing untuk login dan logout
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Routing yang membutuhkan login
Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    // Routing untuk books
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
});
