<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ['name' => 'Muzan', 'skill' => 'Demon Arts'],
        ['name' => 'Tanjiro', 'skill' => 'Water Breathing']
    ];
    return view('ninjas.index', ['greetings' => 'Hello Ninjas', 'ninjas' => $ninjas]);
});