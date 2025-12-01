<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketController;
Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});


Route::get('/market', [ MarketController::class, 'market'])->name('market');
Route::get('/market/{id}', [ MarketController::class, 'auction'])->name('auction');
Route::post('/auctions', [App\Http\Controllers\AuctionController::class, 'store'])
    ->name('auctions.store');


