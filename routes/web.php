<?php

use Database\Factories\PortofolioFactory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'index']);

Route::get('/about', [FrontController::class, 'about']);

Route::get('/portodummy', [FrontController::class, 'dummySave']);

Route::get('/portodummy/update/{id}', [FrontController::class, 'dummyUpdate']);

Route::get('portodummy/delete/{id}', [FrontController::class, "dummyDelete"]);

Route::get('/portofolio', [FrontController::class, 'portofolio']);


Route::get('/portofolioDetail/{id}', [FrontController::class, 'portofolioDetail']);
