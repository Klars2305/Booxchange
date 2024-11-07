<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/choice', function () {
    return view('choice');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/user', function () {
    return view('user');
});

Route::get('/seller', function () {
    return view('seller');
});

Route::get('/trade', function () {
    return view('trade');
});

Route::get('/trans', function () {
    return view('trans');
});

Route::get('/userprofile', function () {
    return view('userprofile');
});

Route::get('/admin', function () {
    return view('admin');
});


Route::view('/', 'welcomepage')->name('welcomepage');
Route::view('/add', 'add')->name('add');
Route::view('/update', 'update')->name('update');