<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
})->name('homepage');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
 return view('contact');
})->name('contactpage');

// Route::get('/','SiteController@index');
// Route::get('/about','SiteController@about');
// Route::get('/contact','SiteController@contact');