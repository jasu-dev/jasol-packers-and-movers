<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');


Route::view('/gallery', 'gallery')->name('gallery');

Route::view('/testimonials', 'testimonials')->name('testimonials');

Route::view('/contact', 'contact')->name('contact');

Route::view('/policies', 'policies')->name('policies');