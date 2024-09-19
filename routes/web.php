<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\HorasExtraController;

Route::get('/', function () {
    return view('home');
});

Route::get('/empresa/create', [EmpresaController::class, 'create'])->name('empresa.create');
Route::post('/empresa/store', [EmpresaController::class, 'store'])->name('empresa.store');
Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresa.index');
Route::get('/empleado/create', [EmpleadoController::class, 'create'])->name('empleado.create');
Route::post('/empleado/store', [EmpleadoController::class, 'store'])->name('empleado.store');
Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleado.index');
Route::get('/contrato/create', [ContratoController::class, 'create'])->name('contratos.create');
Route::post('/contrato/store', [ContratoController::class, 'store'])->name('contratos.store');
Route::get('/contratos', [ContratoController::class, 'index'])->name('contratos.index');
Route::get('/horas_extra/create', [HorasExtraController::class, 'create'])->name('horas_extras.create');
Route::post('/horas_extra/store', [HorasExtraController::class, 'store'])->name('horas_extras.store');
Route::get('/horas_extras', [HorasExtraController::class, 'index'])->name('horas_extras.index');