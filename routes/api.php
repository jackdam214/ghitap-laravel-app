<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\EncounterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// http://localhost:8000/api/departments

Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/patients', [PatientController::class, 'index']);

// group by prefix, controller
Route::prefix('/encounters')->controller(EncounterController::class)->group(function () {
    Route::get('/', 'index'); // get /encounters
    Route::post('/', 'store'); // post /encounters
});

