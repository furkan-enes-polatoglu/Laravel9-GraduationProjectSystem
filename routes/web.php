<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminProjectController as AdminProjectController;

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

Route::get('/', function () { return view('welcome'); });
Route::get('/index2', function () { return view('index2'); });
Route::get('/index2',[HomeController::class, 'index2'])->name('index2');


// *********************************** WEB PANEL ROUTING  ******************************************
Route::get('/home',[HomeController::class, 'index'])->name('index');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/faq',[HomeController::class, 'faq'])->name('faq');
// Route::get('/features',[HomeController::class, 'features'])->name('features');
Route::get('/login',[HomeController::class, 'login'])->name('login');
Route::get('/portfolio',[HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/registration',[HomeController::class, 'registration'])->name('registration');



// ********************************** ADMIN PANEL ROUTING *******************************************
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard',[AdminHomeController::class, 'dashboard'])->name('adminDashboard');

    // ******************************** ADMIN CATEGORY ROUTES *******************************************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function() {
        Route::get('', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destory');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/ImageDestory/{id}', 'ImageDestroy')->name('ImageDestory');  // /admin.category.ImageDestory
    });

    // ******************************** ADMIN PROJECT ROUTES *******************************************
    Route::prefix('/project')->name('project.')->controller(AdminProjectController::class)->group(function() {
        Route::get('', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destory');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/ImageDestory/{id}', 'ImageDestroy')->name('ImageDestory');  // /admin.category.ImageDestory
    });

});


// Route::post('/goster', [HomeController::class, 'save'])->name('save');

//Route with parameters
//Route::get('/param/{number}/{adi}',[HomeController::class, 'param'])->name('param');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
