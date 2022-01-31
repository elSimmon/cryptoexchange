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

Auth::routes(['verify'=>true]);

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
Route::get('/remove-bank/{id}', [\App\Http\Controllers\BankController::class, 'destroy'])->name('remove-bank');

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
Route::post('/save-gift-card', [\App\Http\Controllers\GiftcardController::class, 'store'])->name('save-gift-card');
Route::get('/remove-gift-card/{id}', [\App\Http\Controllers\GiftcardController::class, 'destroy'])->name('remove-gift-card');
Route::get('/edit-gift-card/{id}', [\App\Http\Controllers\GiftcardController::class, 'edit'])->name('edit-gift-card');
Route::put('/update-gift-card/{id}', [\App\Http\Controllers\GiftcardController::class, 'update'])->name('update-gift-card');

//withdrawal
Route::get('all-withdrawals', [\App\Http\Controllers\WithdrawalController::class, 'index'])->name('all-withdrawals');
Route::get('request-withdrawal', [\App\Http\Controllers\WithdrawalController::class, 'create'])->name('request-withdrawal');
Route::post('/withdraw', [\App\Http\Controllers\WithdrawalController::class, 'withdraw'])->name('withdraw');
Route::get('/pay/{id}', [\App\Http\Controllers\WithdrawalController::class, 'pay'])->name('pay');
Route::get('/remove-withdrawal/{id}', [\App\Http\Controllers\WithdrawalController::class, 'destroy'])->name('remove-withdrawal');

//coin trade
Route::get('all-bitcoin-charges', [\App\Http\Controllers\CointradeController::class, 'index'])->name('all-bitcoin-charges');
Route::get('convert-bitcoin', [\App\Http\Controllers\CointradeController::class, 'convert'])->name('convert-bitcoin');
Route::get('convert-ethereum', [\App\Http\Controllers\CointradeController::class, 'convertether'])->name('convert-ethereum');
Route::get('convert-dogecoin', [\App\Http\Controllers\CointradeController::class, 'convertdoge'])->name('convert-dogecoin');
Route::get('convert-usdcoin', [\App\Http\Controllers\CointradeController::class, 'convertusdc'])->name('convert-usdcoin');
Route::post('/trade-bitcoin', [\App\Http\Controllers\CointradeController::class, 'trade'])->name('trade-bitcoin');
Route::post('/trade-ethereum', [\App\Http\Controllers\CointradeController::class, 'tradeEther'])->name('trade-ethereum');
Route::post('/trade-dogecoin', [\App\Http\Controllers\CointradeController::class, 'tradeDoge'])->name('trade-dogecoin');
Route::post('/trade-usdc', [\App\Http\Controllers\CointradeController::class, 'tradeUsdc'])->name('trade-usdc');

//giftcard trade
Route::get('all-gift-card-trades/', [\App\Http\Controllers\CardtradeController::class, 'index'])->name('all-gift-card-trades');
Route::get('sell-card/{id}', [\App\Http\Controllers\CardtradeController::class, 'create'])->name('sell-card');
Route::get('review-card/{id}', [\App\Http\Controllers\CardtradeController::class, 'review'])->name('review-card');
Route::get('approve-card/{id}', [\App\Http\Controllers\CardtradeController::class, 'approve'])->name('approve-card');
Route::post('feedback-card/', [\App\Http\Controllers\CardtradeController::class, 'feedback'])->name('feedback-card');
Route::post('sell-giftcard/', [\App\Http\Controllers\CardtradeController::class, 'store'])->name('sell-giftcard');
Route::get('feedback-messages/', [\App\Http\Controllers\CardtradeController::class, 'messages'])->name('feedback-messages');


//users
Route::get('all-users', [\App\Http\Controllers\UserController::class, 'index'])->name('all-users');
Route::get('profiles', [\App\Http\Controllers\UserController::class, 'profiles'])->name('profiles');
Route::get('my-transactions', [\App\Http\Controllers\UserController::class, 'transactions'])->name('my-transactions');
Route::get('make-admin/{id}', [\App\Http\Controllers\UserController::class, 'makeAdmin'])->name('make-admin');
Route::get('remove-admin/{id}', [\App\Http\Controllers\UserController::class, 'removeAdmin'])->name('remove-admin');

//rates
Route::get('rates', [\App\Http\Controllers\RateController::class, 'index'])->name('rates');
Route::post('add-rate', [\App\Http\Controllers\RateController::class, 'store'])->name('add-rate');
Route::get('edit-rate/{id}', [\App\Http\Controllers\RateController::class, 'edit'])->name('edit-rate');
Route::put('update-rate/{id}', [\App\Http\Controllers\RateController::class, 'update'])->name('update-rate');

//messages
Route::get('all-messages', [\App\Http\Controllers\MessageController::class, 'index'])->name('all-messages');
Route::post('send-message', [\App\Http\Controllers\MessageController::class, 'send'])->name('send-message');
Route::get('read-message/{id}', [\App\Http\Controllers\MessageController::class, 'read'])->name('read-message');
Route::get('delete-message/{id}', [\App\Http\Controllers\MessageController::class, 'destroy'])->name('delete-message');
Route::get('my-messages', [\App\Http\Controllers\MessageController::class, 'show'])->name('my-messages');

//page routes
Route::get('our-rates', [\App\Http\Controllers\PagesController::class, 'rates'])->name('our-rates');
Route::get('terms', [\App\Http\Controllers\PagesController::class, 'terms'])->name('terms');
Route::get('our-policy', [\App\Http\Controllers\PagesController::class, 'policy'])->name('our-policy');
