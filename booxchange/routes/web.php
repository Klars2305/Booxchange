<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BookSaleController;
use App\Http\Controllers\BookTradeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;


// Route::get('/', function () {
//     return view('homepage');
// });

Route::view('/choice', 'choice')->name('choice');
Route::view('/homepage', 'homepage');
Route::view('/buyer', 'buyer');
Route::view('/admin', 'admin');
Route::view('/transaction', 'transaction');
Route::view('/trader', 'trader');
Route::view('/login', 'login');


// Static Home Route
Route::get('/', function () {
    return view('homepage');
});

// Admin Routes
Route::middleware('auth:admin')->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin');
});

// Custom UserController routes

// Default Auth routes
Auth::routes();

// BookSale Routes
Route::get('/sell-book', [BookSaleController::class, 'create'])->name('sell-book.form');
Route::post('/sell-book', [BookSaleController::class, 'store'])->name('sell-book.store');
Route::get('/search', [BookSaleController::class, 'search'])->name('books.search');

// Transaction Route - This should point to the TransactionController
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
Route::post('/transaction/update/{id}', [TransactionController::class, 'update'])->name('transaction.update');
Route::delete('/transaction/{id}', [TransactionController::class, 'destroy'])->name('transaction.destroy');




// Home route managed by HomeController
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/seller', [BookSaleController::class, 'index'])->name('seller');



//Route for Trader routes

Route::get('/trader', [BookTradeController::class, 'index'])->name('trader');
Route::get('/buyer', [BuyController::class, 'index'])->name('buyer');


// Handle User Choices Post
Route::post('/choice', [UsersController::class, 'handleChoice'])->name('choice.post');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
