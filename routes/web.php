<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;

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

Route::view('/', 'home');
Route::get('list', [RestoController::class, 'list']);
Route::view('regester', 'regester');
Route::post('regester', [RestoController::class, 'regester'])->name('hello');
Route::get('delete{id}', [RestoController::class, 'delete']);
Route::get('find{id}', [RestoController::class, 'find']);
Route::post('update', [RestoController::class, 'update']);
Route::get('update', [RestoController::class, 'redirect']);
Route::post('search', [RestoController::class, 'search']);

