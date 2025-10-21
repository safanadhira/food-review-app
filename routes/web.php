<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foods', [FoodController::class, 'index']);

Route::get('/test', function () {
    return 'Laravel is working!';
});

Route::resource('foods', FoodController::class);
Route::resource('restaurants', RestaurantController::class);
Route::get('/restaurants/{name}', [RestaurantController::class, 'show'])->name('restaurants.show');
Route::get('/reviews/create/{food}', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::post('/restaurants', [RestaurantController::class, 'store'])->name('restaurants.store');
Route::get('/restaurants', [RestaurantController::class, 'index'])->name('restaurants.index');
