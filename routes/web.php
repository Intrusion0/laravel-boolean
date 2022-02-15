<?php

use App\Http\Controllers\PostcardController;
use Illuminate\Support\Facades\Route;

// Auth::routes();

// Page home
Route::get('/', 'PostcardController@home')->name('home');

// Get all postcards
Route::get('/api/postcards/list', 'PostcardController@getPostcards')->name('api.postcards.list');

// Create a new postcard
Route::get('/postcard/create', 'PostcardController@createPostcard')->name('postcard.create');

// Store postcard
Route::post('/postcard/store', 'PostcardController@storePostcard')->name('postcard.store');

// Route Auth
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');