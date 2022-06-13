<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminProjectController as AdminProjectController;
use App\Http\Controllers\AdminPanel\ImageController as AdminImageController;
use App\Http\Controllers\AdminPanel\MessageController as AdminMessageController;
use App\Http\Controllers\AdminPanel\FaqController as AdminFaqController;
use App\Http\Controllers\AdminPanel\CommentController as AdminCommentController;
use App\Http\Controllers\AdminPanel\AdminUserController as AdminUserController;
use App\Http\Controllers\UserController as UserController;
use App\Http\Controllers\EvaluationController as EvaluationController;
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
Route::get('search',[HomeController::class, 'search'])->name('search');
Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/about',[HomeController::class, 'about'])->name('aboutus');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/faq',[HomeController::class, 'faq'])->name('faq');
Route::get('/references',[HomeController::class, 'references'])->name('references');
// Route::get('/features',[HomeController::class, 'features'])->name('features');
//Route::get('/login',[HomeController::class, 'login'])->name('login');
Route::get('/project',[HomeController::class, 'project'])->name('project');
Route::get('/projectdetail/{id}',[HomeController::class, 'projectdetail'])->name('projectdetail');
//Route::get('/registration',[HomeController::class, 'registration'])->name('registration');
Route::post('/storemessage',[HomeController::class, 'storemessage'])->name('storemessage');
Route::post('/storecomment',[HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginuser', 'auth.login')->name('loginuser');
Route::view('/registeruser', 'auth.register')->name('registeruser');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
Route::view('/loginadmin', 'admin.login')->name('loginadmin');
Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck'])->name('loginadmincheck');



// ********************************** USER AUTH CONTROL *******************************************
Route::middleware('auth')->group(function() {
// ************************************* USER ROUTES ************************************************
  Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function() {
      Route::get('/', 'index')->name('index');
      Route::get('/reviews', 'reviews')->name('reviews');
      Route::get('/reviewdelete/{id}', 'reviewdelete')->name('reviewdelete');
      Route::get('/uploadproject', 'uploadproject')->name('uploadproject');
      Route::get('/createproject', 'createproject')->name('createproject');
      Route::post('/storeproject', 'storeproject')->name('storeproject');
      Route::get('/detailproject', 'detailproject')->name('detailproject');
      Route::get('/deleteproject/{id}', 'deleteproject')->name('deleteproject');
      Route::get('/showproject/{id}', 'showproject')->name('showproject');
      Route::post('/gradecheck', 'gradecheck')->name('gradecheck');
});

    Route::prefix('userpanel')->name('userpanel.')->controller(AdminImageController::class)->group(function() {

      Route::get('/imageproject/{pid}', 'index2')->name('index2');
      Route::post('/imageproject/store/{pid}', 'store2')->name('store2');
      Route::get('/imageproject/delete/{pid}/{id}', 'destroy2')->name('destory2');

  });


// ************************************* FACULTY ROUTES ************************************************
Route::prefix('facultypanel')->name('facultypanel.')->controller(EvaluationController::class)->group(function() {
    Route::get('/grading', 'grading')->name('grading');
    Route::post('/givegrade/{id}', 'givegrade')->name('givegrade');


});



// ********************************** ADMIN PANEL ROUTING *******************************************
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function() {
    Route::get('/project',[AdminHomeController::class, 'project'])->name('project');

    // ******************************** GENERAL ROUTES *******************************************
        Route::get('/setting',[AdminHomeController::class, 'setting'])->name('setting');
        Route::post('/setting/update',[AdminHomeController::class, 'settingUpdate'])->name('setting.update');
        Route::get('/profile',[AdminHomeController::class, 'profile'])->name('profile');
        Route::get('/logoutadmin', [AdminHomeController::class, 'logoutadmin'])->name('logoutadmin');


    // ******************************** ADMIN CATEGORY ROUTES *******************************************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function() {
        Route::get('/', 'index')->name('index');
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
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destory');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/ImageDestory/{id}', 'ImageDestroy')->name('ImageDestory');  // /admin.category.ImageDestory
    });

    // ******************************** ADMIN PROJECT IMAGE GALLERY ROUTES *******************************************
    Route::prefix('/image')->name('image.')->controller(AdminImageController::class)->group(function() {
        Route::get('/{pid}', 'index')->name('index');
        //Route::post('/create/{pid}', 'create')->name('create');
        Route::post('/store/{pid}', 'store')->name('store');
        Route::get('/delete/{pid}/{id}', 'destroy')->name('destory');

    });

    // ******************************** ADMIN MESSAGE ROUTES *******************************************
    Route::prefix('/message')->name('message.')->controller(AdminMessageController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        //Route::post('/create/{pid}', 'create')->name('create');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destory');

    });

    // ********************************** ADMİN FAQ ROUTES *******************************************
    Route::prefix('/faq')->name('faq.')->controller(AdminFaqController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destory');
        Route::get('/show/{id}', 'show')->name('show');
    });


    // ******************************** ADMIN COMMENT ROUTES *******************************************
    Route::prefix('/comment')->name('comment.')->controller(AdminCommentController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destory');

    });


    // ******************************** ADMIN USER ROUTES *******************************************
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destory');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');
        Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');

    });

  });

});


// Route::post('/goster', [HomeController::class, 'save'])->name('save');

//Route with parameters
//Route::get('/param/{number}/{adi}',[HomeController::class, 'param'])->name('param');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
