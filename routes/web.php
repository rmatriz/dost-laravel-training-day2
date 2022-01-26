<?php

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

Route::get('/subjects', [App\Http\Controllers\StudentController::class, 'enrolledSubjects'])->name('subjects.enrolled');
Route::get('/profiles', [App\Http\Controllers\StudentController::class, 'myProfile'])->name('students.profile');
Route::get('/grades', [App\Http\Controllers\StudentController::class, 'grades'])->name('students.grade');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


