<?php

use App\Http\Controllers\PostcardController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::post('/postcards', [PostcardController::class, 'store'])->name('postcards.store');
Route::get('/postcards', [PostcardController::class, 'index'])->name('postcards.index');
Route::get('/postcards/create', [PostcardController::class, 'create'])->name('postcards.create');
