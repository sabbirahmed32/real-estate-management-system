<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clieant\frontentController;
use App\Http\Controllers\Server\BackendController;
use App\Http\Controllers\Server\AgentsController;
use App\Http\Controllers\Server\PropertyController;

Route::get('/', [frontentController::class, 'index'])->name('index.data');
Route::get('/about', [frontentController::class, 'about'])->name('about.data');
Route::get('/properties', [frontentController::class, 'properties'])->name('properti-data');
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

// Agent
Route::get('/add-agents', [AgentsController::class, 'addAgent'])->name('add.agent');
Route::post('/store-agents', [AgentsController::class, 'storeAgents'])->name('store.agents');
Route::get('/all-agents', [AgentsController::class, 'allAgent'])->name('all.agent');
Route::get('/agent/profile', [AgentsController::class, 'agentProfile'])->name('agent.profile');

// Property
Route::get('/create-property', [PropertyController::class, 'createProperty'])->name('create.property');
Route::get('/properties/list', [PropertyController::class,'index'])->name('properties.index');
Route::post('/property/store', [PropertyController::class, 'storeProperty'])->name('store.property');
