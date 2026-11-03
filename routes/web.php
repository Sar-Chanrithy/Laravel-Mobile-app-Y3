<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SumController;
use Illuminate\Support\Facades\Route;

Route::get("/sum/{a}/{b}", [SumController::class, 'sum']);
Route::get("/students", [StudentController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/hi', function () {
    return '<h1>Hello num</h1>';
});
