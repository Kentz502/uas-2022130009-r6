<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\WeaponController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PlayerStatController;
use App\Http\Controllers\TournamentController;
use App\Models\Operator;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/operator/index', [App\Http\Controllers\OperatorController::class, 'index'])->name('operators.index');
Route::put('/operator/{operator}/update', [OperatorController::class, 'update'])->name('operators.update');
Route::get('/operator/create', [OperatorController::class, 'create'])->name('operators.create');
Route::post('/operator/store', [OperatorController::class, 'store'])->name('operators.store');
Route::get('/operator/show', [OperatorController::class, 'show'])->name('operators.show');
Route::get('/operator/{operator}/edit', [OperatorController::class, 'edit'])->name('operators.edit');
Route::delete('/operator/destroy', [OperatorController::class, 'destroy'])->name('operators.destroy');


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

