<?php

use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\PackageController;
use App\Http\Controllers\Frontend\DestinationController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\TestimonialController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\RegistrationController;
use App\Http\Controllers\Frontend\LoginController;



Route::get('/', [IndexController::class, 'index']);

Route::get('/home', [IndexController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');;
Route::get('/packages', [PackageController::class, 'index'])->name('packages');
Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/register', [RegistrationController::class, 'index'])->name('register');
Route::get('/login', [LoginController::class, 'login'])->name('login');