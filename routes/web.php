<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clieant\frontentController;

Route::get('/', [frontentController::class, 'index'])->name('index.data');
