<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function(){
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function (){
    $tasks = \App\Models\Task::latest()->get();
    return view('index',[
        'tasks' => $tasks
    ]);
})->name('tasks.index');

Route::get('/tasks/{id}', function($id){
    $task = \App\Models\Task::findOrFail($id);
    return view('show',[
        'task' => $task
    ]);
})->name('tasks.show');

Route:: fallback(function(){
    return 'Still got somewhere!';
});