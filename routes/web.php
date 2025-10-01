<?php

use Database\Factories\PortofolioFactory;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app.welcome');
});

Route::get('/about', function () {
    return view('app.about');
});

Route::get('/portofolio', function (PortofolioFactory $factory) {
    $portofolios = $factory->create();
    return view('app.portofolio', ['portofolios' => $portofolios]);
});