<?php

use Database\Factories\PortofolioFactory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PortofolioController;

Route::get('/', [FrontController::class, 'index']);

Route::get('/about', [FrontController::class, 'about']);

Route::get('/portodummy', [FrontController::class, 'dummySave']);

Route::get('/portodummy/update/{id}', [FrontController::class, 'dummyUpdate']);

Route::get('portodummy/delete/{id}', [FrontController::class, "dummyDelete"]);

Route::get('/portofolio', [FrontController::class, 'portofolio']);

Route::get('/portofolioDetail/{id}', [FrontController::class, 'portofolioDetail']);

Route::get('/portofolios', [PortofolioController::class, 'index'])->name('portofolio.index');

Route::get('/portofolios/create', [PortofolioController::class, 'create'])->name('portofolio.create');

Route::post('portofolios', [PortofolioController::class, 'store'])->name('portofolio.store');