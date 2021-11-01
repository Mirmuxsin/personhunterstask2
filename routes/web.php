<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

//home
Route::get('/', function () {
    return view('welcome');
});

//countries
Route::get('/countries/', [CountryController::class, 'all_countries'])->name('get_all_countries');
Route::get('/countries/search/{name}', [CountryController::class, 'search'])->name('search');
Route::get('/countries/get/{name}', [CountryController::class, 'get'])->name('get_info');


