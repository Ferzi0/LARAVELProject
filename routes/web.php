<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::get('/second', [TestController::class, 'second'] )->name('second');



Route::get('/third', [TestController::class, 'third'])->name('third');


Route::get('/home', [MainController::class, 'showIndex'])->name('home');

Route::get('/array', [MainController::class, 'showArray'])->name('array');