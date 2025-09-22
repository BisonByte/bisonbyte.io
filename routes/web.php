<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
Route::get('/', function () {
    return view('index-7');
});

Route::get('{any}',[DashboardController::class, 'index'])->where('any', '.*');
