<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/auction', function () {
    return view('auction');
});
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

Route::get('/signup', [RegisterController::class, 'show'])->name('register.show');
Route::post('/signup', [RegisterController::class, 'store'])->name('register.store');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/market', [ MarketController::class, 'market'])->name('market');
Route::get('/market/{id}', [ MarketController::class, 'auction'])->name('auction');
Route::post('/auctions', [App\Http\Controllers\AuctionController::class, 'store'])
    ->name('auctions.store');



