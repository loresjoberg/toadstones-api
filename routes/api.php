<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\SectionController;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    foreach (User::all() as $user) {
        echo $user->name;
    }
})->middleware('auth:sanctum');;

Route::get('/sections', [SectionController::class, 'index']);
Route::get('/sections/{id}', [SectionController::class, 'show']);
Route::post('/sections', [SectionController::class, 'store']);
Route::put('/sections/{id}', [SectionController::class, 'update']);
Route::delete('/sections/{id}', [SectionController::class, 'destroy']);

Route::get('/features', [FeatureController::class, 'index']);
Route::get('/features/{id}', [FeatureController::class, 'show']);
Route::post('/features', [FeatureController::class, 'store']);
Route::put('/features/{id}', [FeatureController::class, 'update']);
Route::delete('/features/{id}', [FeatureController::class, 'destroy']);
