<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');


Route::view('/gallery', 'gallery')->name('gallery');

Route::view('/testimonials', 'testimonials')->name('testimonials');

Route::view('/contact', 'contact')->name('contact');

Route::view('/policies', 'policies')->name('policies');


Route::view('/packers-and-movers-hinjewadi', 'cities.hinjewadi')->name('hinjewadi');
Route::view('/packers-and-movers-wakad', 'cities.wakad')->name('wakad');
Route::view('/packers-and-movers-baner', 'cities.baner')->name('baner');
Route::view('/packers-and-movers-mahalunge', 'cities.mahalunge')->name('mahalunge');