<?php

use Illuminate\Support\Facades\Route;

Route::view('/','index')->name('aIndex');
Route::view('/about','about')->name('aAbout');
Route::view('/services','service')->name('aServices');
Route::view('/contact','contact')->name('aContact');
