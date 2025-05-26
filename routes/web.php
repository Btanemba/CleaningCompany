<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('component.layout');
});
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
