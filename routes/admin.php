<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

use App\Http\Controllers\Admin\DashboardController;
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
    Route::get('/', [DashboardController::class, 'home'])->name('home');
    Route::get('dashboard', [DashboardController::class, 'home'])->name('home');
    
    Route::prefix('landlord')->name('landlord.')->group(function(){
        Route::get('/', [LandlordController::class, 'index'])->name('index');
        Route::get('create', [LandlordController::class, 'create'])->name('create');
        Route::get('show/{id}', [LandlordController::class, 'show'])->name('show');
        Route::post('store', [LandlordController::class, 'store'])->name('store');
        Route::get('edit/{id}', [LandlordController::class, 'edit'])->name('edit');
        Route::get('destroy/{id}', [LandlordController::class, 'destroy'])->name('destroy');
        Route::get('block/{id}', [LandlordController::class,'view'])->name('block');
    });

    Route::prefix('tenant')->name('tenant.')->group(function(){
        Route::get('/', [TenentController::class, 'index'])->name('index');
        // Route::get('show', [TenentController::class, 'show'])->name('show');
        Route::get('create', [TenentController::class, 'create'])->name('create');
        Route::post('info', [TenentController::class, 'tenantInfo'])->name('tenantInfo');
        // Route::post('store', [TenentController::class, 'store'])->name('store');
        // Route::get('edit/{id}', [TenentController::class, 'edit'])->name('edit');
        // Route::get('block/{id}', [TenentController::class,'view'])->name('block');
    });

    Route::resource('properties', PropertyController::class);
    Route::get('view/property', [PropertyController::class,'view'])->name('view.property');
    // Route::resource('tenants', TenentController::class);
    // Route::get('view/tenent', [TenentController::class,'view'])->name('view');
    Route::resource('leases', LeaseController::class);
    Route::get('view/leases', [LeaseController::class,'view'])->name('view.leases');
    Route::resource('utilities', UtilitiesController::class);
    Route::get('view/utilities',[UtilitiesController::class,'view'])->name('view.utilities');
    Route::resource('invoice', InvoiceController::class);
    Route::resource('payment', PaymentController::class);
    Route::resource('vacate_notice', VacateNoticeController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('report', ReportController::class);
    // Route::get('landlord', [LandlordController::class],'creat');
});

// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);


