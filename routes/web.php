<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/home', function () {
    return view('home');
});

Route::group(['middleware'=>'auth'], function(){
    // Route::get('/', function(){
    //     return view('home');
    // });
    Route::get('home', function(){
        return view('home');
    });
});

// Product
Route::get('/product', [ProductController::class, 'index'])->name('product')->middleware('auth');
Route::get('/product/add', [ProductController::class, 'create'])->middleware('auth');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->middleware('auth');
Route::get('/product/{id}/delete', [ProductController::class, 'destroy'])->middleware('auth');
Route::post('/product',[ProductController::class, 'store'])->middleware('auth');
Route::put('/product/{id}', [ProductController::class, 'update'])->middleware('auth');

// Category
Route::get('/category',[CategoryController::class, 'index'])->name('category')->middleware('auth');
Route::get('/category/add',[CategoryController::class, 'create'])->middleware('auth');
Route::post('/category', [CategoryController::class, 'store'])->middleware('auth');
Route::put('/category/{id}', [CategoryController::class, 'update'])->middleware('auth');
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->middleware('auth');
Route::get('/category/{id}/delete', [CategoryController::class, 'destroy'])->middleware('auth');

// Cart
Route::get('/carts',[CartController::class, 'carts'])->middleware('auth');
Route::get('shift-data', [CartController::class, 'shiftdata'])->name('shift-data')->middleware('auth');
Route::get('/carts/{id}/delete', [CartController::class, 'destroy'])->middleware('auth');


// Auth
Route::get('/register', [AuthController::class, "register"])->name('register');
Route::get('/login', [AuthController::class, "login"])->name('login');
Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::post('/register', [AuthController::class, "doRegister"])->name('do.register');
Route::post('/login', [AuthController::class, "doLogin"])->name('do.login');
 

