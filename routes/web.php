<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;


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

//->middleware('auth')

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::get('product/create', [ProfileController::class, 'create'])->name('create');
Route::post('product/store', [ProfileController::class, 'store'])->name('store');
Route::get('products/{id}/edit', [ProfileController::class, 'edit']);
Route::put('products/{id}/update', [ProfileController::class, 'update'])->name('update');
Route::get('products/{id}/delete', [ProfileController::class, 'delete']);
Route::get('products/{id}/show', [ProfileController::class, 'show']);