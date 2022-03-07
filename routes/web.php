<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    UserControl
};

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
