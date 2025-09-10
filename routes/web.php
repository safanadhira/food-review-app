<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ['name' => 'Muzan', 'id' => '1'],
        ['name' => 'Tanjiro', 'id' => '2']
    ];
    return view('ninjas.index', ['greetings' => 'Hello Ninjas', 'ninjas' => $ninjas]);
});

Route::get('/ninjas/{id}', function ($id) {
    $ninjas = [
        ['name' => 'Muzan', 'id' => '1'],
        ['name' => 'Tanjiro', 'id' => '2']
    ];

    return view('ninjas.show', ['id' => $id]);
});