<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin', function(){
    return view('admin.dashboard');
});

Route::get('login', function(){
    return view('admin.login');
})->name('login');