<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//public
Route::get('/', [PostController::class, 'showApprovedPosts'])->name('posts.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

//admin
Route::post('/admin/posts/{post}/approve', [PostController::class, 'approve'])->middleware(['auth', 'verified'])->name('admin.posts.approve');
Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/', function () {
//     return view('welcome');
// });

//profile nav
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
