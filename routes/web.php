<?php

use App\Http\Controllers\Backend\EmployeeTemperatureController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/master', function () {
    return view('frontend.layouts.main.master');
})->name('master');
Route::get('/', function () {
    return view('welcome');
})->name('index');

Auth::routes();

Route::get('/admin', function () {
    return view('welcome');
})->name('welcome');
Route::prefix('/admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/reports', [App\Http\Controllers\Backend\ReportsController::class, 'calender'])->name('reports');
    Route::resource('/employeeTemperatures', EmployeeTemperatureController::class);
});
