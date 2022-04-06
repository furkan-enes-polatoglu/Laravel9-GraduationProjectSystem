<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/index2',[HomeController::class, 'index2'])->name('index2');

// Route::post('/goster', [HomeController::class, 'save'])->name('save');

//Route with parameters
//Route::get('/param/{number}/{adi}',[HomeController::class, 'param'])->name('param');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
