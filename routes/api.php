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

Route::get('/section', [SectionController::class, 'index']);
Route::get('/section/{id}', [SectionController::class, 'show']);
Route::post('/section', [SectionController::class, 'store']);
Route::put('/section/{id}', [SectionController::class, 'update']);
Route::delete('/section/{id}', [SectionController::class, 'destroy']);

Route::get('/feature', [FeatureController::class, 'index']);
Route::get('/feature/{id}', [FeatureController::class, 'show']);
Route::post('/feature', [FeatureController::class, 'store']);
Route::put('/feature/{id}', [FeatureController::class, 'update']);
Route::delete('/feature/{id}', [FeatureController::class, 'destroy']);
