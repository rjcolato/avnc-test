<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout');
});
Route::get('/Turns/reporte', [\App\Http\Controllers\TurnsController::class, 'report'])->name('turns.report');
Route::get('/Branches/reporte', [\App\Http\Controllers\BranchesController::class, 'report'])->name('branches.report');
Route::get('/Employees/reporte', [\App\Http\Controllers\EmployeesController::class, 'report'])-> name('employees.report');
Route::get('/Shifts/reporte', [\App\Http\Controllers\ShiftsController::class, 'report'])-> name('shifts.report');
Route::resource('Turns', \App\Http\Controllers\TurnsController::class);
Route::resource('Branches', \App\Http\Controllers\BranchesController::class);
Route::resource('Employees', \App\Http\Controllers\EmployeesController::class);
Route::resource('Shifts', \App\Http\Controllers\ShiftsController::class);

