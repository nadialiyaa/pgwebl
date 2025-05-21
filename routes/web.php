<?php

use App\Http\Controllers\PointsController;
use App\Http\Controllers\PolygonsController;
use App\Http\Controllers\PolylinesController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PointsController::class, 'index'])->name('map');
Route::get('/', [PolylinesController::class, 'index'])->name('map');
Route::get('/', [PolygonsController::class, 'index'])->name('map');

Route::get('/table', [TableController::class, 'index'])->name('table');

Route::post('/store-points', [TableController::class,'store'])->name('store.points');
Route::post('/store-polylines', [TableController::class,'store'])->name('store.polylines');
Route::post('/store-polygons', [TableController::class,'store'])->name('store.polygons');

Route::resource('points', PointsController::class);
Route::resource('polylines', PolylinesController::class);
Route::resource('polygons', PolygonsController::class);
