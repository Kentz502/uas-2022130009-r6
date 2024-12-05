<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\WeaponController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PlayerStatController;
use App\Http\Controllers\TournamentController;
use App\Models\Operator;
use App\Models\PlayerStat;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', function () {
    return view('index.blade.php '); // Mengarahkan ke index.blade.php
})->name('home');

Route::get('/operator/index', [App\Http\Controllers\OperatorController::class, 'index'])->name('operators.index');
Route::put('/operator/{operator}/update', [OperatorController::class, 'update'])->name('operators.update');
Route::get('/operator/create', [OperatorController::class, 'create'])->name('operators.create');
Route::post('/operator/store', [OperatorController::class, 'store'])->name('operators.store');
Route::get('/operator/show', [OperatorController::class, 'show'])->name('operators.show');
Route::get('/operator/{operator}/edit', [OperatorController::class, 'edit'])->name('operators.edit');
Route::delete('/operator/{operator}/destroy', [OperatorController::class, 'destroy'])->name('operators.destroy');

Route::get('/weapon/index', [App\Http\Controllers\WeaponController::class, 'index'])->name('weapons.index');
Route::put('/weapon/{weapon}/update', [WeaponController::class, 'update'])->name('weapons.update');
Route::get('/weapon/create', [WeaponController::class, 'create'])->name('weapons.create');
Route::post('/weapon/store', [WeaponController::class, 'store'])->name('weapons.store');
Route::get('/weapon/show', [WeaponController::class, 'show'])->name('weapons.show');
Route::get('/weapon/{weapon}/edit', [WeaponController::class, 'edit'])->name('weapons.edit');
Route::delete('/weapon/{weapon}/destroy', [WeaponController::class, 'destroy'])->name('weapons.destroy');


Route::get('/map/index', [App\Http\Controllers\MapController::class, 'index'])->name('maps.index');
Route::put('/map/{map}/update', [MapController::class, 'update'])->name('maps.update');
Route::get('/map/create', [MapController::class, 'create'])->name('maps.create');
Route::post('/map/store', [MapController::class, 'store'])->name('maps.store');
Route::get('/map/show', [MapController::class, 'show'])->name('maps.show');
Route::get('/map/{map}/edit', [MapController::class, 'edit'])->name('maps.edit');
Route::delete('/map/{map}/destroy', [MapController::class, 'destroy'])->name('maps.destroy');



Route::get('/playerstat/index', [App\Http\Controllers\PlayerStatController::class, 'index'])->name('playerstats.index');
Route::put('/playerstat/{playerstat}/update', [PlayerStatController::class, 'update'])->name('playerstats.update');
Route::get('/playerstat/create', [PlayerStatController::class, 'create'])->name('playerstats.create');
Route::post('/playerstat/store', [PlayerStatController::class, 'store'])->name('playerstats.store');
Route::get('/playerstat/show', [PlayerStatController::class, 'show'])->name('playerstats.show');
Route::get('/playerstat/{playerstat}/edit', [PlayerStatController::class, 'edit'])->name('playerstats.edit');
Route::delete('/playerstat/{playerstat}/destroy', [PlayerStatController::class, 'destroy'])->name('playerstats.destroy');



// Route::resource('weapons', WeaponController::class);
// Route::resource('maps', MapController::class);
Route::resource('roles', RoleController::class);
// Route::resource('matches', TournamentController::class);
// Route::resource('player-stats', PlayerStatController::class);

Route::get('../role/index', [App\Http\Controllers\RoleController::class, 'index'])->name('roles.index');
Route::get('../role/update', [RoleController::class, 'update'])->name('roles.index');
Route::get('../role/index', [RoleController::class, 'create'])->name('roles.create');
Route::post('../role/index', [RoleController::class, 'store'])->name('roles.store');
Route::get('../role/index', [RoleController::class, 'show'])->name('roles.show');
Route::get('../role/index', [RoleController::class, 'edit'])->name('roles.edit');


