<?php

use App\Http\Controllers\Api\LeadController;
use App\Http\Controllers\Api\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

// Route::get('api/projects', [ProjectController::class, 'index'])->name('api.posts.index');
Route::get('projects', [ProjectController::class, 'index'])->name('api.projects.index');
Route::get('projects/search', [ProjectController::class, 'search'])->name('api.projects.search');

Route::post('leads', [LeadController::class, 'store'])->name('api.leads.store');
