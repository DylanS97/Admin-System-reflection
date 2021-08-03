<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;
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

Route::middleware(['auth'])->group(function() {
    Route::get('/', function () { return view('dashboard'); })->name('dashboard');

    Route::resource('companies', 'App\Http\Controllers\CompaniesController');
    Route::get('/companies/{company}/employees', [CompaniesController::class, 'show']);

    Route::resource('employees', 'App\Http\Controllers\EmployeesController');
    Route::get('/companies/{company}/employees/create', [EmployeesController::class, 'create']);
    Route::get('/employees/company/{company}', [EmployeesController::class, 'index']);
});



require __DIR__.'/auth.php';