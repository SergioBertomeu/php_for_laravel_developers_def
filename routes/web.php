<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
      $tasks1 = new stdClass();
    $objecto->nobre = "Jose Manuel";
    $objecto->apellidos = "Aguilar Nuñez";
    $objecto->web = "https://www.jose-aguilar.com";
    $tasks2 = ;

      $objecto = new stdClass();
      $objecto->nobre = "Jose Manuel";
      $objecto->apellidos = "Aguilar Nuñez";
      $objecto->web = "https://www.jose-aguilar.com";
      $tasks2 = ;
        $tasca2

    ];
    return view('tasks',[
        'tasks' => $tasks
    ]);
});

Route::get('/tasks', function () {
    return view('tasks',[
        'tasks' => []
    ]);
});

Route::get('/users', function () {
    return view('users');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/about', function () {
    return view('about');
});

