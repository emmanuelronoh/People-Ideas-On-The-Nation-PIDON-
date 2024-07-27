<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoEditorController;
use App\Http\Controllers\MicroblogController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\AdminToolsController;
use App\Http\Controllers\MonetizationController;

// Authentication Routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('password/reset', [AuthController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [AuthController::class, 'reset'])->name('password.update');

// User Routes
Route::get('user/{id}/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('user/{id}/followers', [UserController::class, 'followers'])->name('user.followers');
Route::get('user/{id}/following', [UserController::class, 'following'])->name('user.following');

// Post Routes
Route::resource('posts', PostController::class);

// Message Routes
Route::resource('messages', MessageController::class);

// Photo Routes
Route::resource('photos', PhotoController::class);

// Video Routes
Route::resource('videos', VideoEditorController::class);

// Microblog Routes
Route::resource('microblogs', MicroblogController::class);

// Group Routes
Route::resource('groups', GroupController::class);

// Admin Tools Routes
Route::get('admin/dashboard', [AdminToolsController::class, 'dashboard'])->name('admin.dashboard');
Route::get('admin/moderation', [AdminToolsController::class, 'moderation'])->name('admin.moderation');
Route::get('admin/content-monitoring', [AdminToolsController::class, 'contentMonitoring'])->name('admin.content.monitoring');

// Monetization Routes
Route::get('monetization/creator-fund', [MonetizationController::class, 'creatorFund'])->name('monetization.creator_fund');
Route::get('monetization/brand-partnerships', [MonetizationController::class, 'brandPartnerships'])->name('monetization.brand_partnerships');
Route::get('monetization/advertising', [MonetizationController::class, 'advertising'])->name('monetization.advertising');

// routes/web.php
Route::get('/home', [HomeController::class, 'index'])->name('home');

// routes/api.php
Route::get('/users', [UserController::class, 'index'])->middleware('auth:api');
