<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customercontroller;
use App\Http\Controllers\PortfolioController;
use App\Livewire\Contact;
Route::get('/', function () {
    return view('welcome');
});


Route::post('storemsg', [customercontroller::class, 'store']);
Route::view('portfolio-details', 'portfolio-details');
Route::get('/portfolio-details/{id}', [PortfolioController::class,'show'])->name('portfolio.details');