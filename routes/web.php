<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Auth\authController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\OffDayController;
use App\Http\Controllers\Site\HomeController;

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



Route::get('/', [HomeController::class, 'index'])->name('home');






Route::get('/admin/login', [authController::class, 'login'])->name('admin-login');
Route::post('admin/loginSubmit', [authController::class, 'loginSubmit']);
Route::post('/admin/logout', [authController::class, 'logout'])->name('admin.logout');        
          








Route::middleware(['auth'])->group(function () {

Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin/dashboard');

Route::get('blog-list', [BlogController::class, 'index'])->name('blog-list');
Route::get('blog-create', [BlogController::class, 'create'])->name('blog-create');
Route::post('blog-save', [BlogController::class, 'store'])->name('blog-save');
Route::get('blog-edit/{id}', [BlogController::class, 'edit'])->name('blog-edit');
Route::post('blog-update', [BlogController::class, 'update'])->name('blog-update');
Route::post('blog-delete', [BlogController::class, 'destroy'])->name('blog-delete');

Route::get('service-list', [ServicesController::class, 'index'])->name('service-list');
Route::get('service-create', [ServicesController::class, 'create'])->name('service-create');
Route::post('service-save', [ServicesController::class, 'store'])->name('service-save');
Route::get('service-edit/{id}', [ServicesController::class, 'edit'])->name('service-edit');
Route::post('service-update', [ServicesController::class, 'update'])->name('service-update');
Route::post('service-delete', [ServicesController::class, 'destroy'])->name('service-delete');

Route::get('offday-list', [OffDayController::class, 'index'])->name('offday-list');
Route::get('offday-create', [OffDayController::class, 'create'])->name('offday-create');
Route::post('offday-save', [OffDayController::class, 'store'])->name('offday-save');
Route::post('offday-delete', [OffDayController::class, 'destroy'])->name('offday-delete');





});

