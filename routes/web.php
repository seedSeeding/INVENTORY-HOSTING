<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () {
    return view('weolcome');
})->where('any', '.*'); 

// Auth::routes(['verify' => true]);
