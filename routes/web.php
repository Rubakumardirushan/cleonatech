<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customercontroller;

use App\Livewire\Contact;
Route::get('/', function () {
    return view('welcome');
});


Route::post('storemsg', [customercontroller::class, 'store']);