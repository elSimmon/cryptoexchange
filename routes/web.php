<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Transactions
Route::get('/all-transactions', [App\Http\Controllers\TransactionController::class, 'index'])->name('all-transactions');
//Profiles
Route::get('/user-profiles', [App\Http\Controllers\ProfileController::class, 'index'])->name('user-profiles');
Route::get('/my-profile', [App\Http\Controllers\ProfileController::class, 'create'])->name('my-profile');
Route::post('/update-profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('update-profile');
//banks
Route::get('/bank-accounts', [App\Http\Controllers\BankController::class, 'index'])->name('bank-accounts');
Route::get('/create-bank-details', [App\Http\Controllers\BankController::class, 'create'])->name('create-bank-details');
Route::post('/update-bank-details', [App\Http\Controllers\BankController::class, 'store'])->name('update-bank-details');

//dashboard
Route::get('/my-dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('my-dashboard');

//card categories
Route::get('/all-cards', [\App\Http\Controllers\CardCategoryController::class, 'index'])->name('all-cards');
Route::get('/manage-cards', [App\Http\Controllers\CardCategoryController::class, 'create'])->name('manage-cards');
Route::post('/save-card-category', [App\Http\Controllers\CardCategoryController::class, 'store'])->name('save-card-category');
Route::get('/edit-card-category/{id}', [\App\Http\Controllers\CardCategoryController::class, 'edit'])->name('edit-card-category');
Route::get('/show-card-category/{id}', [\App\Http\Controllers\CardCategoryController::class, 'show'])->name('show-card-category');
Route::post('/update-card-category', [\App\Http\Controllers\CardCategoryController::class, 'update'])->name('update-card-category');
Route::get('/remove-card-category/{id}', [\App\Http\Controllers\CardCategoryController::class, 'destroy'])->name('remove-card-category');

//gift cards


//withdrawal
Route::get('withdraw-funds', [\App\Http\Controllers\WithdrawalController::class, 'withdraw'])->name('withdraw');


//bitcoin trade
Route::get('convert-bitcoin', [\App\Http\Controllers\CointradeController::class, 'convert'])->name('convert-bitcoin');
