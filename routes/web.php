<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Auth;


Route::resource('conferences', ConferenceController::class);


Route::get('/', function () {
    if (Auth::check()) {
        // If logged in, redirect to the conference list or dashboard page
        return redirect()->route('conferences.index');
    } else {
        // If not logged in, redirect to the login page
        return redirect()->route('login');
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/guest', [ConferenceController::class, 'viewAsGuest'])->name('viewAsGuest');

