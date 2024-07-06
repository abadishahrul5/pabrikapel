<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});
Route::get('/pertama', function () {
    return view('pertama');
});
Route::get('/club', function () {
    return view('club');
});
Route::get('/kedua', function () {
    return view('kedua');
});
Route::get('/ketiga', function () {
    return view('ketiga');
});
Route::get('/keempat', function () {
    return view('keempat');
});
Route::get('/kelima', function () {
    return view('kelima');
});
Route::get('/keenam', function () {
    return view('keenam');
});
Route::get('/tour', function () {
    return view('tour');
});
