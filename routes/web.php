<?php

use Illuminate\Support\Facades\Route;

// Auth::routes();

Route::get('/', 'PostcardController@home')->name('home');