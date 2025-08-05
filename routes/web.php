<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/solution', function () {
    return view('solution');
})->name('solution');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');
