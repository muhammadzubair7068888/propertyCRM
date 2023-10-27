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
use App\Http\Controllers\Admin\NotificationController;
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
        Route::post('update/{id}', [LandlordController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [LandlordController::class, 'destroy'])->name('destroy');
        Route::get('block/{id}', [LandlordController::class,'block'])->name('block');
        Route::get('unblock/{id}', [LandlordController::class,'unblock'])->name('unblock');
    });

    Route::prefix('tenant')->name('tenant.')->group(function(){
        Route::get('/', [TenentController::class, 'index'])->name('index');
        Route::get('create', [TenentController::class, 'create'])->name('create');
        Route::post('store', [TenentController::class, 'store'])->name('store');
        Route::get('destroy/{id}', [TenentController::class, 'destroy'])->name('destroy');
        Route::get('block/{id}', [TenentController::class, 'block'])->name('block');
        Route::get('unblock/{id}',[TenentController::class,'unblock'])->name('unblock');
        Route::get('show/{id}',[TenentController::class,'show'])->name('show');
        Route::get('edit/{id}',[TenentController::class,'edit'])->name('edit');
        Route::post('update/{id}',[TenentController::class,'update'])->name('update');
        // Route::post('store', [TenentController::class, 'store'])->name('store');
        // Route::get('edit/{id}', [TenentController::class, 'edit'])->name('edit');
        // Route::get('block/{id}', [TenentController::class,'view'])->name('block');
    });

    Route::prefix('properties')->name('properties.')->group(function(){
        Route::get('/', [PropertyController::class, 'index'])->name('index');
        Route::get('create', [PropertyController::class, 'create'])->name('create');
        Route::post('store', [PropertyController::class, 'store'])->name('store');
        Route::get('show/{id}', [PropertyController::class, 'show'])->name('show');
    });

    Route::prefix('notification')->name('notification.')->group(function(){
        Route::get('/', [NotificationController::class,'read'])->name('read');
    });

    // Route::resource('properties', PropertyController::class);
    // Route::resource('tenants', TenentController::class);
    // Route::get('view/tenent', [TenentController::class,'view'])->name('view');
    // Route::resource('leases', LeaseController::class);

    Route::prefix('leases')->name('leases.')->group(function(){
        Route::get('/', [LeaseController::class, 'index'])->name('index');
        Route::get('create', [LeaseController::class, 'create'])->name('create');
        Route::post('store', [LeaseController::class, 'store'])->name('store');
        // Route::get('show/{id}', [PropertyController::class, 'show'])->name('show');
    });

    Route::get('view/leases', [LeaseController::class,'view'])->name('view.leases');
    Route::resource('utilities', UtilitiesController::class);
    Route::get('utilities/destroy/{id}', [UtilitiesController::class,'destroy'])->name('utilities.destroy');
    Route::get('view/utilities',[UtilitiesController::class,'view'])->name('view.utilities');
    Route::resource('invoice', InvoiceController::class);
    Route::resource('payment', PaymentController::class);
    Route::get('receipt/{id}',[PaymentController::class,'show'])->name('receipt');
    Route::get('fetch-lease',[PaymentController::class,'fetchLease'])->name('fetch-lease');
    Route::resource('vacate_notice', VacateNoticeController::class);
    Route::get('fetch-vacatelease', [VacateNoticeController::class,'vacatelease'])->name('vacatelease');
    Route::resource('setting', SettingController::class);
    Route::resource('report', ReportController::class);
    // Route::get('landlord', [LandlordController::class],'creat');

    // Common Routes (Ajax)
    Route::get('fetch-units', [DashboardController::class, "fetchUnits"])->name('fetch-units');
    Route::get('fetch-payment', [DashboardController::class, "fetchPayment"])->name('fetch-payment');
});

// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);


