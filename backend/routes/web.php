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

Route::redirect('/', 'login', 301);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('departments', App\Http\Controllers\departmentController::class);
    Route::resource('employees', App\Http\Controllers\employeeController::class);
    Route::resource('pcos', App\Http\Controllers\PCosController::class);
    Route::resource('pcAccounts', App\Http\Controllers\pc_accountController::class);
    Route::resource('webAccounts', App\Http\Controllers\Web_accountController::class);
    Route::resource('webAccountCategories', App\Http\Controllers\Web_account_categoryController::class);
    Route::resource('offices', App\Http\Controllers\OfficeController::class);
    Route::resource('devices', App\Http\Controllers\DeviceController::class);
    Route::resource('webBrowsers', App\Http\Controllers\Web_browserController::class);
    Route::resource('mailers', App\Http\Controllers\MailerController::class);
    Route::resource('antivirusSoftware', App\Http\Controllers\AntivirusSoftwareController::class);
});
