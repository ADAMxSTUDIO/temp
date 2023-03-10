<?php

use App\Http\Controllers\FilterController;
use App\Http\Controllers\SoftDeleteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index']);
Route::get('/create', [UserController::class, 'create'])->name('user.create');
Route::post('/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/edit/{var:name}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/getName/with/john', FilterController::class)->name('user.filter');

Route::get('/getDeteledUsers', [SoftDeleteController::class, 'trash'])->name('user.trash');
Route::get('/restore/{id}', [SoftDeleteController::class, 'restore'])->name('user.restore');
Route::get('/forceDelete/{id}', [SoftDeleteController::class, 'forceDelete'])->name('user.forceDelete');