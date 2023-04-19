<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [StudentController::class, 'index']);

Route::get('/student/add', [StudentController::class, 'addStudent']);

Route::post('/student', [StudentController::class, 'postStudent']);

Route::get('/student/update/{id}', [StudentController::class, 'updateStudent']);

Route::put('/student/{id}', [StudentController::class, 'postUpdate']);

Route::get('/student/delete/{id}', [StudentController::class, 'deleteStudent']);