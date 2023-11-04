<?php


use App\Http\Controllers\PagesController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TaskController::class, 'index']);

//    $task1 = Task::create([
//       'title' => 'Tasca 1',
//       'description' => 'lorem bla bla car',
//       'completed' => 0
//    ]);
//    $task2 = Task::create([
//       'title' => 'Tasca 2',
//       'description' => 'lorem bla bla car',
//       'completed' => 0
//    ]); $task3 = Task::create([
//       'title' => 'Tasca 3',
//       'description' => 'lorem bla bla car',
//       'completed' => 0
//    ]);
//
//    $tasks = [
//        $task1,
//        $task2,
//        $task3
//    ];

Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/users', [UserController::class, 'index']);

Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/about', [PagesController::class, 'about']);

