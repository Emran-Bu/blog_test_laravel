<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\SiteController;

use App\Http\Controllers\resourceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test/test/im', [testController::class, 'test'])->name('test.hello');

// Route::get('/about/about/oi', [testController::class, 'about'])->name('about');
Route::view('/about', 'about');

// group routing
Route::prefix('/website')->name('web-us.')->group(function () {
    Route::get('/test/test/im', [testController::class, 'test'])->name('test.hello');

    Route::get('/about/about/oi', [testController::class, 'about'])->name('about');
});

Route::group(['prefix'=>'site/test'], function (){
    Route::get('/', [testController::class, 'test'])->name('test1');
    Route::post('/site/test', [testController::class, 'test'])->name('test2');
    Route::get('/site/test/1', [testController::class, 'test'])->name('test3');
});

Route::prefix('web')->group(function (){
    Route::get('/', [testController::class, 'test'])->name('test1');
    Route::post('/site/test', [testController::class, 'test'])->name('test2');
    Route::get('/site/test/1', [testController::class, 'test'])->name('test3');
});

// id pass
Route::get('/pass/{id}', [testController::class, 'idPass'])->where('id', '[0-9]+');

//optionalNamePass
Route::get('/pass/{name?}', [testController::class, 'optionalNamePass']);

// array return
Route::get('/arr', [testController::class, 'arr']);

Route::resource('resource', resourceController::class)->only('show');

Route::view('/com', 'component');


// blog site
Route::get('/', [SiteController::class, 'index'])->name('index');
// single post
Route::get('/post', [SiteController::class, 'singlePost']);

// user-register-form
Route::get('/user-register-form', [SiteController::class, 'userRegisterForm'])->name('user-register-form');

Route::post('/user-register', [SiteController::class, 'Registration'])->name('user-registration');

// user-login-form
Route::get('/user-login-form', [SiteController::class, 'userLoginForm'])->name('user-login-form');

Route::post('/user-login', [SiteController::class, 'login'])->name('user-login');

// logout
Route::get('/user_logout', [SiteController::class, 'logout'])->name('user_logout');

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function ()
{
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('category')->name('category.')->group(function () {

        Route::get('/index', [CategoryController::class, 'indexCategory'])->name('index');

        Route::get('/create', [CategoryController::class, 'createCategory'])->name('create');

        Route::post('/store', [CategoryController::class, 'storeCategory'])->name('store');

        Route::get('/{id}', [CategoryController::class, 'show'])->name('show');

        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');

        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');

        Route::delete('/{id}', [CategoryController::class, 'destroyCategory'])->name('destroy');

    });

});

// date print route

Route::get('/date_print', [testController::class, 'datePrint']);

Route::post('/dateMonthly', [testController::class, 'datePrint']);

