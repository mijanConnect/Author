<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BookController;
use App\Http\Controllers\Backend\PostController;

use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(
    ['middleware' => ['auth']],
    function () {
        Route::get('/logout', [AdminController::class, 'logout']);
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::post('/profile/{id}', [AdminController::class, 'profileUpdate'])->name('profile_update');
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::resource('/book', BookController::class);
        Route::resource('/post', PostController::class);

        // HomeController
        Route::get('/home', [HomeController::class, 'home'])->name('home');
        Route::get('/books', [HomeController::class, 'books'])->name('books');
        Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
        Route::get('/blog-details', [HomeController::class, 'blog_details'])->name('blog-details');
        Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
        Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact-us');
        Route::get('/single-book', [HomeController::class, 'single_book'])->name('single-book');
        Route::get('/store', [HomeController::class, 'store'])->name('store');
    }
);