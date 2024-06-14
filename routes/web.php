<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'vỉewLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Register //
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('add-user', [RegisterController::class, 'addUser'])->name('addUser');

//  Admin //
Route::middleware('check-login-admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');

    // Category
    Route::prefix('/')->controller(CategoryController::class)->group(function () {
        Route::get('/danh-muc', 'create')->name('viewAddCategory');
        Route::post('/them-danh-muc', 'store')->name('AddCategory');

    });
});
