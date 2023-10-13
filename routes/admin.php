<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\LanguageController;

use App\Http\Controllers\Admin\LandlordController;
use App\Http\Controllers\Admin\LeaseController;
use App\Http\Controllers\Admin\TenentController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\UtilitiesController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\VacateNoticeController;
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

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [StaterkitController::class, 'home'])->name('home');
    Route::get('dashboard', [StaterkitController::class, 'home'])->name('home');
    Route::resource('landlord', LandlordController::class);
    Route::get('view', [LandlordController::class,'view'])->name('view');
    Route::resource('properties', PropertyController::class);
    Route::get('view/property', [PropertyController::class,'view'])->name('view.property');
    Route::resource('tenants', TenentController::class);
    Route::get('view/tenent', [TenentController::class,'view'])->name('view');
    Route::resource('leases', LeaseController::class);
    Route::resource('utilities', UtilitiesController::class);
    Route::resource('invoice', InvoiceController::class);
    Route::resource('payment', PaymentController::class);
    Route::resource('vacate_notice', VacateNoticeController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('report', ReportController::class);
    // Route::get('landlord', [LandlordController::class],'creat');
});

// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);


