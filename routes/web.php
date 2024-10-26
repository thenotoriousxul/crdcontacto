<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('contacts', ContactController::class);

Route::get('/contacts/menor', [ContactController::class, 'menoresDeEdad'])->name('contacts.menor');

