<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])
    ->where('id', '[0-9]+')
    ->name('categories.show');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])
    ->where('id', '[0-9]+')
    ->name('categories.edit');
Route::put('/categories/{id}/edit', [CategoryController::class, 'update'])
    ->where('id', '[0-9]+')
    ->name('categories.update');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::delete('/categories/{id}/edit', [CategoryController::class, 'destroy'])
    ->where('id', '[0-9]+')
    ->name('categories.destroy');