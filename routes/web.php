<?php

use App\Services\Newsletter;
use MailchimpMarketing\ApiClient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\PostCommentsController;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store']);
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


Route::post('/posts/{post:slug}/comments', [PostCommentsController::class, 'store'])->middleware('auth');

// index, show, create, store, edit, update, destroy


Route::post('newsletter', NewsletterController::class);


