<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Auth;


Route::resource('conferences', ConferenceController::class);


Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('conferences.index');
    } else {
        return redirect()->route('login');
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/guest', [ConferenceController::class, 'viewAsGuest'])->name('viewAsGuest');

