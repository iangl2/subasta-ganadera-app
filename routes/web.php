<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

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

Route::post('/auction/{id}/bid', [MarketController::class, 'placeBid'])
    ->name('auction.placeBid')
    ->middleware('auth'); // requiere usuario logueado


Route::get('/news', function () {
    return view('news');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile', [ProfileController::class, 'index'])
    ->middleware('auth')
    ->name('profile');


