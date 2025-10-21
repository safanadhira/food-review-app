<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/restaurants', [RestaurantController::class, 'index'])->name('restaurants.index');

Route::get('/test', function () {
    return 'Laravel is working!';
});

//Route::resource('foods', FoodController::class);
Route::resource('restaurants', RestaurantController::class);
Route::get('/restaurants/view/{name}', [RestaurantController::class, 'show'])->name('restaurants.show');
Route::get('/reviews/create/{food}', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::post('/restaurants', [RestaurantController::class, 'store'])->name('restaurants.store');
Route::get('/restaurants', [RestaurantController::class, 'index'])->name('restaurants.index');
Route::get('/foods/{food}/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
Route::delete('/restaurants/{restaurant}', [RestaurantController::class, 'destroy'])->name('restaurants.destroy');
Route::get('/restaurants/{restaurant}/foods/create', [FoodController::class, 'create'])->name('foods.create');
Route::post('/restaurants/{restaurant}/foods', [FoodController::class, 'store'])->name('foods.store');
Route::delete('/foods/{food}', [FoodController::class, 'destroy'])->name('foods.destroy');
Route::get('/restaurants/{restaurant}/edit', [RestaurantController::class, 'edit'])->name('restaurants.edit');
Route::put('/restaurants/{restaurant}', [RestaurantController::class, 'update'])->name('restaurants.update');
