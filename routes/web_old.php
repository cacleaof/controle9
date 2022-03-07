<?php
// use App\Http\Controllers\{
//     UserControl
// };
use App\Http\Controllers\{
    UserController
};
use Illuminate\Support\Facades\Route;
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Route::get('/', 'UserControl@index')->name('index');
Route::get('/', function () {
     return view('welcome');
 });
