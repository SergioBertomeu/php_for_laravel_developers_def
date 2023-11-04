<?php


use App\Http\Controllers\TaskController;
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

Route::get('/users', function () {
    return view('users');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

