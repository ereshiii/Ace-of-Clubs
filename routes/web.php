<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\AuthController;


Route::view('/', 'pages.home')->name('home');
Route::view('/hierarchy', 'pages.hierarchy')->name('hierarchy');
Route::view('/members', 'pages.members')->name('members');
Route::view('/lounge', 'pages.lounge')->name('lounge');
Route::view('/events', 'pages.event')->name('events');
Route::view('/rules', 'pages.rules')->name('rules');
Route::view('/dashboard', 'pages.dashboard')->name('dashboard');
Route::view('/admin', 'pages.admin')->name('admin');

// Auth routes (login & registration)
Route::get('/join', [AuthController::class, 'showSignUpForm'])->name('join');
Route::post('/join', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');




