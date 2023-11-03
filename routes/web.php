<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $tasks = [
        'name' => 'Tasca1'
    ];
    return view('tasks', [
        'tasks' => $tasks
    ]);
});

Route::get('/tasks', function () {
    return view('tasks', [
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

