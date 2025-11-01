<?php

use Illuminate\Support\Facades\Route;



Route::get('/register', function () {
    return view('pages.auth.register');
});
Route::get('/login', function () {
    return view('pages.auth.login');
});


Route::get('/index', function () {
    return view('pages.index');
});
Route::get('/detail', function () {
    return view('pages.index');
});
Route::get('/summaryday', function () {
    return view('pages.index');
});
Route::get('/summarymonth', function () {
    return view('pages.index');
});
Route::get('/summaryyear', function () {
    return view('pages.index');
});
Route::get('/resto', function () {
    return view('pages.index');
});
Route::get('/hotel', function () {
    return view('pages.hotel.index_hotel');
});
