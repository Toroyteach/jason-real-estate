<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;

Route::prefix('blog')->name('blogs.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index'); // /blog
    Route::get('{slug}', [BlogController::class, 'show'])->name('show'); // /blog/{slug}
    Route::get('/category/{category}', [BlogController::class, 'showByCategory'])->name('categories.show');
    Route::get('/tag/{tag}', [BlogController::class, 'show'])->name('tags.show');
    Route::post('/{blog}/comment', [BlogController::class, 'storeComment'])->name('blog.comment');
});

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/details', [PageController::class, 'serviceDetails'])->name('services.details');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/team/details', [PageController::class, 'teamDetail'])->name('team.details');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact-submit', [PageController::class, 'submit'])->name('contact.submit');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');