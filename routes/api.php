<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

//countries
Route::get('/countries/', [CountryController::class, 'all_countries']);
Route::get('/countries/search/{name}', [CountryController::class, 'search']);
Route::get('/countries/get/{name}', [CountryController::class, 'get']);
