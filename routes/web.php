<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    UserControl,
    Admin\AdminController,
    Admin\TailControl,
    Admin\ProjControl,
    GoogleSheetsController
};
use App\Http\Livewire\{
    ShowTweets,
    ShowMessage
};
Route::get('googlesheets', [GoogleSheetsController::class, 'sheetOperation'])->name('googlesheet');
Route::get('/message', ShowMessage::class);
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/tweets', ShowTweets::class);
Route::get('/', function () { return view('home');});
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/', function () { return view('home');});
    Route::get('admin/n_proj', [ProjControl::class, 'n_proj'])->name('admin.proj.n_proj');
    Route::get('admin/store_p', [ProjControl::class, 'store_p'])->name('admin.proj.store_p');

});
Route::prefix('admin')->group(function () {
    Route::get('/', [TailControl::class, 'index'])->name('admin.home');
});

require __DIR__.'/auth.php';
