<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ['name' => 'Muzan', 'id' => '1', 'skill' => 'Demon Art'],
        ['name' => 'Tanjiro', 'id' => '2', 'skill' => 'Water Breathing']
    ];
    return view('ninjas.index', ['greetings' => 'Hello Ninjas', 'ninjas' => $ninjas]);
});

Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
    $ninjas = [
        ['name' => 'Muzan', 'id' => '1'],
        ['name' => 'Tanjiro', 'id' => '2']
    ];

    return view('ninjas.show', ['id' => $id]);
});