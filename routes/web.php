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
    return view('pages.detail.index_detail');
});
Route::get('/editdetail', function () {
    return view('pages.detail.edit_detail');
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

// resto
Route::get('/resto', function () {
    return view('pages.resto.index_resto');
});
Route::get('/addrestoran', function () {
    return view('pages.resto.tambah_resto');
});
Route::get('/updaterestoran', function () {
    return view('pages.resto.update_resto');
});
Route::get('/deleteresto', function () {
    return view('pages.resto.rrr');
});
// hotel
Route::get('/hotel', function () {
    return view('pages.hotel.index_hotel');
});
Route::get('/tambahhotel', function () {
    return view('pages.hotel.tambah_hotel');
});
Route::get('/updatehotel', function () {
    return view('pages.hotel.update_hotel');
});
Route::get('/hotel', function () {
    return view('pages.hotel.dddd');
});