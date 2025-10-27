<?php

use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome_page');
});


Route::get('/results/{result}/print', [ResultController::class, 'print'])->name('results.print');