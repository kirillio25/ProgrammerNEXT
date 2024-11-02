<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/posts', [PostController'__invoke']);


Auth::routes();

Route::get('{page}', MainController::class)->where('page', '.*');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
