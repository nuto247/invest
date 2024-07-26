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

Route::get('/invest', [AllController::class, 'invest'])->middleware(['auth', 'verified'])->name('invest');

Route::get('/logout', [AllController::class, 'logout'])->name('logout');

Route::get('/dashboard', [AllController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/submit', [AllController::class, 'submitForm'])->name('form.submit');
Route::get('/results', [AllController::class, 'showResults'])->name('form.results');
Route::get('/confirm', [AllController::class, 'confirm'])->middleware(['auth', 'verified'])->name('confirm');

Route::get('/withdraw', [AllController::class, 'withdraw'])->middleware(['auth', 'verified'])->name('confiwithdrawrm');

Route::post('/withdraws', [AllController::class, 'withdraws'])->middleware(['auth', 'verified'])->name('withdraws');
Route::get('/confirmx', [AllController::class, 'confirmx'])->middleware(['auth', 'verified'])->name('confirmx');

Route::get('/plans', [AllController::class, 'plans'])->middleware(['auth', 'verified'])->name('plans');

Route::get('/addinvest', [AllController::class, 'addinvest'])->middleware(['auth', 'verified'])->name('addinvest');

Route::post('/addinvests', [AllController::class, 'store'])->name('addinvests');

Route::post('/store', [AllController::class, 'store'])->name('store');

Route::get('/investnow', [AllController::class, 'investnow'])->name('investnow');

Route::post('/submitinvest', [AllController::class, 'submitinvest'])->name('submitinvest');


Route::get('/listusers', [AllController::class, 'listusers'])->middleware(['auth', 'verified'])->name('listusers');

Route::get('/adddetail', [AllController::class, 'adddetail'])->middleware(['auth', 'verified'])->name('adddetail');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
