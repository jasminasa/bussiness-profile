<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WhyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Events\Logout;

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

Route::resource('/', HomeController::class);
Route::get('/about', function () {
    return view('dashboard.about');
});
Route::get('/service', function () {
    return view('dashboard.service');
});
Route::get('/blog', function () {
    return view('dashboard.blog');
});
Route::get('/gallery', function () {
    return view('dashboard.gallery');
});
Route::get('/testimonial', function () {
    return view('dashboard.testimonial');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authentication'])->name('authentication');
Route::post('/logout', [LoginController::class, 'logout']);


Route::resource('blogs', BlogController::class)->middleware('auth');
Route::resource('galleries', GalleryController::class)->middleware('auth');
Route::resource('services', ServiceController::class)->middleware('auth');
Route::resource('sliders', SliderController::class)->middleware('auth');
Route::resource('testimonials', TestimonialController::class)->middleware('auth');
Route::resource('abouts', AboutController::class)->middleware('auth');
Route::resource('contacts', ContactController::class)->middleware('auth');
Route::resource('why', WhyController::class)->middleware('auth');
Route::resource('configs', ConfigController::class)->middleware('auth');