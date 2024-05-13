<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome')->name('home');
Route::view('/nosotros', 'nosotros')->name('nosotros');

Route::get('/producto', [PostController::class, 'index'])->name('posts.index');
Route::get('/producto/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/producto', [PostController::class, 'store'])->name('posts.store');
Route::get('/producto/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/producto/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('/producto/{post}', [PostController::class, 'update'])->name('posts.update');

Route::view('/pago', 'pago')->name('pago')->middleware('auth');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);