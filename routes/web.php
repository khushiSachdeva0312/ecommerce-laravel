<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//     return view('index');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\CommonController::class, 'home'])->name('home');
Route::get('/shop', [App\Http\Controllers\CommonController::class, 'shop'])->name('shop');
Route::get('/why', [App\Http\Controllers\CommonController::class, 'why'])->name('why');
Route::get('/testimonial', [App\Http\Controllers\CommonController::class, 'testimonial'])->name('testimonial');
Route::get('/contact', [App\Http\Controllers\CommonController::class, 'contact'])->name('contact');
Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
Route::get('/provider', [App\Http\Controllers\UserController::class, 'adminLoggedIn'])->name('provider');
Route::get('/add/item', [App\Http\Controllers\UserController::class, 'addItem'])->name('addItem');
Route::post('/item', [App\Http\Controllers\UserController::class, 'registerItem'])->name('registerItem');

// Route::get('/serviceProvider', [App\Http\Controllers\UserController::class, 'serviceProvider'])->name('serviceProvider');

Route::get('/viewProvider', [App\Http\Controllers\UserController::class, 'viewProvider'])->name('viewProvider');
Route::post('/register',[App\Http\Controllers\UserController::class, 'registerUser'])->name('registerUser');