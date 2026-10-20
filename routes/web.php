<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

Route::get('/login', [LoginController::class, "index"]);
Route::post('/login', [LoginController::class, "login"]);

Route::get('/dashboard', fn() => "dashboard || " . auth()->id())->middleware("auth")->name("dashboard");
