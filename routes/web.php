<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clieant\frontentController;
use App\Http\Controllers\Server\BackendController;

Route::get('/', [frontentController::class, 'index'])->name('index.data');
Route::get('/about', [frontentController::class, 'about'])->name('about.data');
Route::get('/properties', [frontentController::class, 'properties'])->name('properties.data');
Route::get('/properties-details', [frontentController::class, 'propertiesDetails'])->name('properties.details');
Route::get('/services', [frontentController::class, 'services'])->name('services.data');
Route::get('/services-details', [frontentController::class, 'servicesDetails'])->name('services.details');
Route::get('/agents', [frontentController::class, 'agents'])->name('agents.data');
Route::get('/agents/profile', [frontentController::class, 'agentsProfile'])->name('agents.profile');
Route::get('/blog', [frontentController::class, 'blog'])->name('blog.data');
Route::get('/blog-details', [frontentController::class, 'blogDetals'])->name('blog.details');
Route::get('/contact', [frontentController::class, 'contact'])->name('contact.data');




// Server side route
Route::get('/admin/dashboard', [BackendController::class, 'dashboard'])->name('dashboard.data');
Route::get('/agent/dashboard', [BackendController::class, 'agentDashboard'])->name('agent.dashboard');
Route::get('/analytics/dashboard', [BackendController::class, 'analyticsDashboard'])->name('analytics.dashboard');

