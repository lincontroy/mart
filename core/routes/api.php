<?php
use Illuminate\Support\Facades\Route;


Route::controller('UserController')->group(function () {

    Route::get('response', 'response')->name('response');
});