<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AvailabilityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('home');
Route::view('/about', 'main.about')->name('about');
Route::view('/rooms', 'main.rooms')->name('rooms');
Route::view('/restaurant', 'main.restaurant')->name('restaurant');
Route::view('/gallery', 'main.gallery')->name('gallery');
Route::view('/blog', 'main.blog')->name('blog');
Route::view('/contact', 'main.contact')->name('contact');

Route::post('/availability', [AvailabilityController::class, 'availability'])->name('availability');