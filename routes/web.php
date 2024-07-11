<?php

use Illuminate\Support\Facades\Route;


//index
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/performer', function () {
    return view('performer');
});
Route::get('/program', function () {
    return view('Program');
});
Route::get('/venue', function () {
    return view('venue');
});
Route::get('/contact', function () {
    return view('contact');
});

