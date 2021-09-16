<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\EntertainmentController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RegisteredController;

use App\Http\Controllers\RenderController;
use App\Http\Controllers\TeachController;


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
    return view('camp/index');
    // return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('admin_panel')->group( function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'] )->name('homeAdmin');
    
});

Route::resource('entertainments', EntertainmentController::class);
Route::resource('abouts', AboutController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('users', RegisterController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('photos', PhotoController::class);
Route::resource('users', UserController::class);
Route::resource('registereds', RegisteredController::class);

Route::get('/', [App\Http\Controllers\RenderController::class, 'reviewsPage'])->name('start');
Route::get('/search', [App\Http\Controllers\Admin\TeacherController::class, 'search'])->name('teacher');



