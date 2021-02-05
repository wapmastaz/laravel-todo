<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\todosController;
use App\Models\Todos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [todosController::class, 'index']);

Route::get('/todos', [todosController::class, 'index']);

Route::get('/create-todo', [todosController::class, 'create']);

Route::post('/store-todo', [todosController::class, 'store']);

Route::get('/todos/{id}', [todosController::class, 'show']);

Route::get('/todos/edit/{id}', [todosController::class, 'edit']);

Route::post('/update-todo', [todosController::class, 'update']);

Route::get('/todos/delete/{id}', [todosController::class, 'destroy']);

Route::get('/todos/completed/{id}', [todosController::class, 'completed']);