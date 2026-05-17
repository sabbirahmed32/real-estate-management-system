<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clieant\frontentController;

Route::get('/', [frontentController::class, 'index'])->name('index.data');
Route::get('/about', [frontentController::class, 'about'])->name('about.data');
Route::get('/properties', [frontentController::class, 'properties'])->name('properties.data');
Route::get('/services', [frontentController::class, 'services'])->name('services.data');
Route::get('/agents', [frontentController::class, 'agents'])->name('agents.data');
Route::get('/blog', [frontentController::class, 'blog'])->name('blog.data');
