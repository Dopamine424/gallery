<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('contact');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

// Route::get('/auth', function () {
//     return view('auth');
// })->name('auth');


Route::get('/profile', fn()=> 'profile')->middleware('auth')->name('profile');


Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@create')->middleware('guest')->name('register');
Route::post('/register/submit', 'App\Http\Controllers\Auth\RegisterController@store')->middleware('guest')->name('register-form');

Route::get('/auth', 'App\Http\Controllers\Auth\AuthController@create')->middleware('guest')->name('auth');
Route::post('/auth/submit', 'App\Http\Controllers\Auth\AuthController@store')->middleware('guest')->name('auth-form');


Route::post('/logout', 'App\Http\Controllers\Auth\AuthController@destroy')->middleware('auth')->name('logout');


Route::get('/forgot-password', 'App\Http\Controllers\Auth\ForfotPasswordController@create')->middleware('guest')->name('password.request');
Route::post('/forgot-password/submit', 'App\Http\Controllers\Auth\ForfotPasswordController@store')->middleware('guest')->name('password.request-form');

Route::get('/reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@create')->middleware('guest')->name('password.reset');



Route::get('/add', 'App\Http\Controllers\ImageController@create')->middleware('auth')->name('add');

Route::post('/add/submit', 'App\Http\Controllers\ImageController@store')->middleware('auth')->name('add-form');

Route::get('/', 'App\Http\Controllers\ImageController@allData')->middleware('auth')->name('all-data');

// Route::post('/auth/submit', 'App\Http\Controllers\AuthController@submit')->name('auth-form');