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


Route::get('/extra', function () {
 return view('extra');
})->name('extrapage');

// Route::get('/',action: 'HomeController@index');
// Route::get('/home',action: 'HomeController@index');
// Route::get('/about','HomeController@about');
// Route::get('/contact','HomeController@contact');
// Route::get('/extra','HomeController@contact');