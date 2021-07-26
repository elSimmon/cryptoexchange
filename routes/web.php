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
Route::get('/new-card-category', [App\Http\Controllers\CardCategoryController::class, 'create'])->name('new-card-category');
Route::post('/save-card-category', [App\Http\Controllers\CardCategoryController::class, 'store'])->name('save-card-category');
