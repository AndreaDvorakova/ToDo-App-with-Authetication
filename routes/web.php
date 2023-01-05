<?php

use App\Http\Controllers\ListController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegistrationController::class, 'create'])->name('registration.create');
Route::post('/register', [RegistrationController::class, 'store'])->name('registration.store');

Route::get('/login', [SessionController::class, 'create'])->name('session.create');
Route::post('/login', [SessionController::class, 'store'])->name('session.store');
Route::get('/logout', [SessionController::class, 'destroy'])->name('session.destroy');

Route::get('/tasks', [ListController::class, 'show'])->name('task.show');
Route::post('/tasks', [ListController::class, 'store'])->name('task.store');
Route::put('/tasks/{id}', [ListController::class, 'edit'])->name('task.edit');
Route::delete('/tasks/{id}', [ListController::class, 'delete'])->name('task.delete');