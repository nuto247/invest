<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AllController;
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});

Route::get('/logout', [AllController::class, 'logout'])->name('logout');

Route::get('/dashboard', [AllController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/plans', [AllController::class, 'plans'])->middleware(['auth', 'verified'])->name('plans');

Route::get('/addinvest', [AllController::class, 'addinvest'])->middleware(['auth', 'verified'])->name('addinvest');

Route::post('/addinvests', [AllController::class, 'store'])->name('addinvests');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
