<?php

use App\livewire\Auth\AuthHomepage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', AuthHomepage::class);
