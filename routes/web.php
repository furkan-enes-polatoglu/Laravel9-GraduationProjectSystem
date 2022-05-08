<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;

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
Route::get('/admin/dashboard',[AdminHomeController::class, 'dashboard'])->name('adminDashboard');


// ******************************** ADMIN CATEGORY ROUTES *******************************************
Route::get('/admin/category',[AdminCategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create',[AdminCategoryController::class, 'create'])->name('admin_category_create');
Route::post('/admin/category/store',[AdminCategoryController::class, 'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}',[AdminCategoryController::class, 'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}',[AdminCategoryController::class, 'update'])->name('admin_category_update');
Route::get('/admin/category/delete/{id}',[AdminCategoryController::class, 'destroy'])->name('admin_category_destory');
Route::get('/admin/category/show/{id}',[AdminCategoryController::class, 'show'])->name('admin_category_show');




// Route::post('/goster', [HomeController::class, 'save'])->name('save');

//Route with parameters
//Route::get('/param/{number}/{adi}',[HomeController::class, 'param'])->name('param');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
