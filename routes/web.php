<?php

use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return 'Welcome to the Homepage';
})->name('home.index');

Route::get('/contact', static function () {
    return 'Contact';
})->name('home.contact');

Route::get('/articles/{id}', static function ($id) {
    return"Article $id";
})-> name('articles.show');
