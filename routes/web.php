<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\Hello1Controller;
use App\Http\Controllers\PersonController;
use App\Http\Middleware\Hello1Middleware;
use App\Http\Controllers\BoardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/hello1', [Hello1Controller::class, 'index']);
Route::post('/hello1', [Hello1Controller::class, 'post']);
Route::get('/hello1', [Hello1Controller::class, 'index'])->middleware(Hello1Middleware::class);
Route::get('/person', [PersonController::class, 'index']);
Route::get('/person/find', [PersonController::class, 'find']);
Route::post('/person/find', [PersonController::class, 'search']);
Route::get('/person/add', [PersonController::class, 'add']);
Route::post('/person/add', [PersonController::class, 'create']);
Route::get('/person/edit', [PersonController::class, 'edit']);
Route::post('/person/edit', [PersonController::class, 'update']);
Route::get('/person/del', [PersonController::class, 'delete']);
Route::post('/person/del', [PersonController::class, 'remove']);
Route::resource('board', BoardController::class);
Route::get('/person/{id}', [PersonController::class, 'show']);



//Route::get('/hello1', function () {
//    return view('livewire.hello1-component');
//});
