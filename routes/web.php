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

Route::get('/home1', [AllController::class, 'updateInvestments']);

Route::get('/logout', [AllController::class, 'logout'])->name('logout');

Route::get('/dashboard', [AllController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/submit', [AllController::class, 'submitForm'])->name('form.submit');
Route::get('/results', [AllController::class, 'showResults'])->name('form.results');
Route::get('/confirm', [AllController::class, 'confirm'])->middleware(['auth', 'verified'])->name('confirm');

Route::get('/withdraw', [AllController::class, 'withdraw'])->middleware(['auth', 'verified'])->name('confiwithdrawrm');

Route::post('/withdraws', [AllController::class, 'withdraws'])->middleware(['auth', 'verified'])->name('withdraws');
Route::get('/confirmx', [AllController::class, 'confirmx'])->middleware(['auth', 'verified'])->name('confirmx');

Route::get('/planssss', [AllController::class, 'plans'])->middleware(['auth', 'verified'])->name('plans');

Route::get('/invest', [AllController::class, 'addinvest'])->middleware(['auth', 'verified'])->name('addinvest');
Route::post('/withdrawx', [AllController::class, 'withdrawx'])->name('withdrawx');

Route::post('/addinvests', [AllController::class, 'addinvests'])->name('addinvests');
Route::get('/bitcoinPage', [AllController::class, 'bitcoinPage'])->name('bitcoinPage');
Route::get('/usdtPage', [AllController::class, 'usdtPage'])->name('usdtPage');
Route::get('/defaultPage', [AllController::class, 'defaultPage'])->name('defaultPage');
Route::get('/success', [AllController::class, 'success'])->name('success');

Route::get('/listtransx', [AllController::class, 'listusers'])->middleware(['auth', 'verified'])->name('listusers');
Route::get('/transedit/{id}', [AllController::class, 'transedit'])->name('transedit');
Route::put('/transactions/{id}', [AllController::class, 'updateTransaction'])->name('updateTransaction');
Route::get('/mytrans', [AllController::class, 'mytrans'])->middleware(['auth', 'verified'])->name('mytrans');

Route::post('/addwithdrawal', [AllController::class, 'addwithdrawal'])->name('addwithdrawal');

Route::get('/adddetail', [AllController::class, 'adddetail'])->middleware(['auth', 'verified'])->name('adddetail');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
