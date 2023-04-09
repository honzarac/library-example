<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryItemController;

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

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/library-item/{id}', [LibraryItemController::class, 'detail'])->name('libraryItem.detail');
Route::post('/library-item/{id}', [LibraryItemController::class, 'update'])->name('libraryItem.update');
Route::delete('/library-item/{id}', [LibraryItemController::class, 'delete'])->name('libraryItem.delete');
