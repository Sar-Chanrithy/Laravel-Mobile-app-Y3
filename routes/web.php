<?php

use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;


Route::get("/students", [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/', function () {
    return view('welcome');
});


