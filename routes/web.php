<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/sabzi-bundle', function () {
    return view('sabzi-bundle');
})->name('sabzi-bundle');

Route::get('/weekly-sabzi', function () {
    return view('weekly-sabzi');
})->name('weekly-sabzi');

Route::get('/sabzi-of-the-day', function () {
    return view('sabzi-of-the-day');
})->name('sabzi-of-the-day');

Route::get('/seasonal-sabzi', function () {
    return view('seasonal-sabzi');
})->name('seasonal-sabzi');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/checkout2', function () {
    return view('checkout2');
})->name('checkout2');

Route::get('/checkout3', function () {
    return view('checkout3');
})->name('checkout3');

// Route::get('/cart', function () {
//     return view('cart');
// })->name('cart');

// Route::get('/cart',[CartController::class, 'addToCart'])->name('cart');
// Route::get('/cart', [CartController::class, 'addToCart'])->name('cart');

// Route::post('/cart', [CartController::class, 'addToCart'])->name('cart');
// Route::get('/cart', [CartController::class, 'showCart']);
