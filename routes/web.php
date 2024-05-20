<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('dashboard');
    return view('pages.app.dashboard-simpadu',['type_menu' =>'']);
});

Route::get('/login', function () {
    // return view('login');
    return view('pages.auth.auth-login',['type_menu' =>'']);
})-> name('login'); 

Route::get('/register', function () {
    // return view('register');
    return view('pages.auth.auth-register',['type_menu' =>'']);
})-> name('register');


Route::get('/forgot', function () {
    return view('pages.auth.auth-forgot-password');

})->name('forgot');

Route::get('/reset', function () {
    return view('pages.auth.auth-reset-password');

})->name('reset');