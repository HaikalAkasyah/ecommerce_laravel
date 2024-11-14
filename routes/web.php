<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\UserController;

// Guest Route
// Routes khusus untuk pengguna yang belum login (guest)
Route::group(['middleware' => 'guest'], function() {

    // Route untuk halaman welcome
    Route::get('/', function () {
        return view('welcome');
    });

    // Route untuk halaman registrasi
    Route::get('/register', [AuthController::class, 'register'])->name('register');

    // Route untuk mengirim data registrasi
    Route::post('/post-register', [AuthController::class, 'post_register'])->name('post.register');

    // Route untuk proses login
    Route::post('/post-login', [AuthController::class, 'login']);
});

// Admin Route
// Routes khusus untuk admin dengan middleware 'admin'
Route::group(['middleware' => 'admin'], function() {

    // Route untuk halaman dashboard admin
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Product Route
    // Route untuk menampilkan halaman produk di admin
    Route::get('/product', [ProductController::class, 'index'])->name('admin.product');

    // Route untuk logout admin
    Route::get('/admin-logout', [AuthController::class, 'admin_logout'])->name('admin.logout');
});

// User Route
// Routes khusus untuk user yang telah login dengan middleware 'web'
Route::group(['middleware' => 'web'], function() {

    // Route untuk halaman dashboard user
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');

    // Route untuk logout user
    Route::get('/user-logout', [AuthController::class, 'user_logout'])->name('user.logout');
});
