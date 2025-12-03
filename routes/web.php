<?php

use App\Http\Controllers\DemoController;
use Database\Factories\PortofolioFactory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\CustomMiddleware;

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

Route::post('/session/set', [SessionController::class, 'storeSession'])->name('session.set');

Route::get('/session/set', [SessionController::class, 'index'])->name('session.index');

Route::get('/session/get', [SessionController::class, 'getSession'])->name('session.get');

Route::get('/session/delete', [SessionController::class, 'deleteSession'])->name('session.delete');

Route::get('/demo/index', [DemoController::class, 'index'])->name('demo.index');

Route::middleware(CustomMiddleware::class)->group(function(){
    Route::get('/demo/restricted', [DemoController::class, 'restrictedAccess'])->name('demo.restricted');
    Route::get('/demo/profile', [DemoController::class, 'profile'])->name('demo.profile');
    Route::get('/demo/dashboard', [DemoController::class, 'dashboard'])->name('demo.dashboard');
});

Route::get('/demo/login', [DemoController::class, 'login'])->name('demo.login');

Route::post('/demo/login', [DemoController::class, 'auth'])->name("demo.login.post");

Route::post('demo/logout', [DemoController::class, 'logout'])->name("demo.logout");