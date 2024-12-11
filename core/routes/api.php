<?php
use Illuminate\Support\Facades\Route;


Route::controller('UserController')->group(function () {

    Route::post('response', 'response')->name('response');
});