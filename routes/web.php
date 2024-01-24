<?php


use App\Http\Controllers\TrainController;

Route::get('/', [TrainController::class, 'index'])->name('home');
 //ciao
