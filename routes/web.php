<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PregnantController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('dashboard');

Route::get('/add/pregnant', [PregnantController::class, 'add_pregnant'])->name('add_pregnant');
Route::get('/list', [PregnantController::class, 'list_pregnant'])->name('list_pregnant');
Route::post('/pregnant/store', [PregnantController::class, 'store'])->name('PregnantSave');
Route::get ('/list/delete/{id}', [PregnantController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
