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
use App\Http\Controllers\Admin\RepairController;
use App\Http\Controllers\Admin\VacateNoticeController;
use App\Http\Controllers\SMSController;
use App\Models\PropertyType;
use Illuminate\Http\Request;

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
    Route::get('/sms',function(){
        return view('admin.sms');
    })->name('show-sms');

    // Route::post('sms',[SMSController::class,'sendSMS'])->name('sms');
    Route::post('sms',[SMSController::class,'sendSMS'])->name('sms');

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
        Route::get('update/{id}', [PropertyController::class, 'update'])->name('edit');
        Route::post('update/{id}', [PropertyController::class, 'updateData'])->name('update.data');

        Route::post('store', [PropertyController::class, 'store'])->name('store');
        Route::get('show/{id}', [PropertyController::class, 'show'])->name('show');
        Route::get('destroy/{id}', [PropertyController::class, 'destroy'])->name('destroy');
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
        Route::any('edit/{id}', [LeaseController::class, 'edit'])->name('edit');
        Route::any('update/{id}', [LeaseController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [LeaseController::class, 'destroy'])->name('destroy');
        // Route::get('show/{id}', [PropertyController::class, 'show'])->name('show');
    });

    Route::get('view/leases/{id}', [LeaseController::class,'view'])->name('view.leases');
    Route::get('utilities/editnote/{id}', [UtilitiesController::class, 'editnote'])->name('utilities.editnote');
    Route::resource('utilities', UtilitiesController::class);
    Route::post('utilities.update', [UtilitiesController::class,'update'])->name('utilities.update');
    Route::get('utilities/destroy/{id}', [UtilitiesController::class,'destroy'])->name('utilities.destroy');
    Route::get('view/utilities',[UtilitiesController::class,'view'])->name('view.utilities');
    Route::resource('invoice', InvoiceController::class);
    Route::resource('payment', PaymentController::class);
    Route::get('receipt/{id}',[PaymentController::class,'show'])->name('receipt');
    Route::get('fetch-lease',[PaymentController::class,'fetchLease'])->name('fetch-lease');

    Route::resource('vacate_notice', VacateNoticeController::class);

    Route::prefix('vacate-notice')->name('vacate_notice.')->group(function(){
        Route::get('/', [VacateNoticeController::class,'index'])->name('index');
        Route::get('fetch-vacatelease', [VacateNoticeController::class,'vacatelease'])->name('vacatelease');
        Route::get('edit-note', [VacateNoticeController::class,'editnote'])->name('editnote');
        Route::post('store', [VacateNoticeController::class,'store'])->name('store');
        Route::get('destroy/{id}', [VacateNoticeController::class,'destroy'])->name('destroy');
        Route::get('show/{id}', [VacateNoticeController::class,'show'])->name('show');
        Route::post('update', [VacateNoticeController::class,'update'])->name('update');
    });

    // Route::prefix('setting')->name('setting.')->group(function(){
    //     Route::prefix('property')->name('property.')->group(function(){
    //         Route::get('/', [PropertyType::class,'index'])->name('index');
    //     });

    // });

    // Route::resource('setting', SettingController::class);


    Route::prefix('setting')->name('setting.')->group(function(){
        Route::get('/', [SettingController::class,'index'])->name('index');
        Route::post('store', [SettingController::class,'store'])->name('store');
        Route::post('utility-store', [SettingController::class,'utilitystore'])->name('utilitystore');
        Route::post('amenity-store', [SettingController::class,'amenitystore'])->name('amenitystore');
        Route::post('unit-store', [SettingController::class,'unitstore'])->name('unitstore');
        Route::post('tenant-prefix-update/{id}', [SettingController::class,'tenantprefixupdate'])->name('tenantprefixupdate');
        Route::post('update/{id}', [SettingController::class,'update'])->name('update');
        Route::post('update-lease/{id}', [SettingController::class,'updatelease'])->name('updatelease');
        // Route::get('fetch-vacatelease', [VacateNoticeController::class,'vacatelease'])->name('vacatelease');
        // Route::get('edit-note', [VacateNoticeController::class,'editnote'])->name('editnote');
        // Route::post('store', [VacateNoticeController::class,'store'])->name('store');
        // Route::get('destroy/{id}', [VacateNoticeController::class,'destroy'])->name('destroy');
        // Route::get('show/{id}', [VacateNoticeController::class,'show'])->name('show');
        // Route::post('update', [VacateNoticeController::class,'update'])->name('update');
    });

    Route::resource('report', ReportController::class);
    Route::resource('repair', RepairController::class);
    Route::get('repair', [RepairController::class, 'index'])->name('repair');
    Route::post('repair/update-status/{id}', [RepairController::class, 'updateStatus'])->name('repair.update.status');


    // Route::get('landlord', [LandlordController::class],'creat');

    // Common Routes (Ajax)
    Route::get('fetch-units', [DashboardController::class, "fetchUnits"])->name('fetch-units');
    Route::get('fetch-payment', [DashboardController::class, "fetchPayment"])->name('fetch-payment');
});
