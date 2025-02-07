<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/fireblock', [HomeController::class, 'fireblock'])->name('fireblock');
Route::get('/projektavimas', [HomeController::class, 'design'])->name('design');
Route::get('/produktai', [HomeController::class, 'products'])->name('products');
Route::get('/priesgaisriniu-sistemu-montavimo-darbai', [HomeController::class, 'installation'])->name('installation');
Route::get('/dazymo-darbai', [HomeController::class, 'painting'])->name('painting');
Route::get('/kontaktai', [HomeController::class, 'contact'])->name('contact');
Route::post('/kontaktai', [ContactController::class, 'send'])->name('contact.send');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');

// Public blog routes
Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');

// Admin routes
Route::middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('posts', AdminPostController::class);
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('pages', AdminPageController::class);
});

// Only include login routes, exclude registration
require __DIR__.'/auth.php';
