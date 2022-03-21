<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    UserControl,
    Admin\AdminController
};
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () { return view('home');});
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    //No controle original precisa de namespace e prefix admin
    //Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin',], function(){

        Route::get('task', 'ProjControl@task')->name('admin.proj.task');

		Route::get('p_proj', 'ProjControl@p_proj')->name('admin.proj.p_proj');

		Route::get('m_task', 'ProjControl@m_task')->name('admin.proj.m_task');

		Route::get('showpj', 'ProjControl@showpj')->name('proj.showpj');

		Route::get('delpj', 'ProjControl@delpj')->name('proj.delpj');

		Route::get('deltk', 'ProjControl@deltk')->name('proj.deltk');

		Route::get('showtk', 'ProjControl@showtk')->name('proj.showtk');

		Route::get('showdp', 'ProjControl@showdp')->name('proj.showdp');

		Route::post('upd_t', 'ProjControl@upd_t')->name('proj.upd_t');

		Route::post('upd_d', 'ProjControl@upd_d')->name('proj.upd_d');

		Route::post('upd_p', 'ProjControl@upd_p')->name('proj.upd_p');






});

Route::get('n_proj', 'ProjControl@n_proj')->name('admin.proj.n_proj');
// Route::get('/dashboard', [AdminController::class, 'index'])->name('proj.index');
Route::get('/dashboard-old', [AdminController::class, 'dashboard'],  function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
