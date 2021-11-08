<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ExpedienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;


Route::resource('/usuarios', AdminController::class)->except('show')->names('admin.usuarios');
Route::get('/bitacora', [AdminController::class, 'bitacora'])->name('admin.bitacora');
Route::get('/{id}', [HomeController::class, 'index'])->name('admin.home');

Route::get('/actuacion/agregar/{id}', [HomeController::class, 'create'])->name('admin.create');
Route::post('/actuacion/agregar', [HomeController::class, 'store'])->name('admin.store');
Route::get('/actuacion/mostrar/{id}', [HomeController::class, 'mostrar'])->name('admin.mostrar');
Route::get('/actuacion/download/{file}', [HomeController::class, 'download'])->name('admin.download');


Route::get('/expedientes/{id}', [ExpedienteController::class, 'expedientes'])->name('admin.expedientes');
Route::post('/expedientes/{id}', [ExpedienteController::class, 'agregar'])->name('admin.agregar');

/* Route::get('/actuacion/{id}', [HomeController::class, 'show'])->name('admin.show'); */
