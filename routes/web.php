<?php

use App\Http\Controllers\admin\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaterkitController;
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


use App\Http\Controllers\landlord\DocumentController;
use App\Http\Controllers\landlord\LeaseController as LandlordLeaseController;
use App\Http\Controllers\landlord\LogoutController;
use App\Http\Controllers\landlord\PaymentController as LandLoardPaymentController;
use App\Http\Controllers\landlord\ProfileController;
use App\Http\Controllers\landlord\PropertyController as LandloardPropertyController;
use App\Http\Controllers\landlord\VacateNoticeController as LandloardVacateNoticeController;


use App\Http\Controllers\tenant\DocumentController as TenantDocumentController;
use App\Http\Controllers\tenant\LeaseController as TenantLeaseController;
use App\Http\Controllers\tenant\LogoutController as TenentLogoutController;
use App\Http\Controllers\tenant\PaymentController as TenantPaymentController;
use App\Http\Controllers\tenant\ProfileController as TenantProfileController;
use App\Http\Controllers\tenant\InvoiceController as TenantInvoiceController;
use App\Http\Controllers\tenant\VacateNoticeController as TenantVacateNoticeController;



use App\Http\Controllers\LanguageController;

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

Route::get('/', [AuthController::class, 'login_page'])->name('login');
Route::get('login', [AuthController::class, 'login_page'])->name('login');
Route::get('attempt_login', [AuthController::class, 'login'])->name('login.attempt');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

###### admin routes ######
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [StaterkitController::class, 'home'])->name('home');
    Route::get('dashboard', [StaterkitController::class, 'home'])->name('home');
    Route::resource('landlord', LandlordController::class);
    Route::resource('properties', PropertyController::class);
    Route::resource('tenants', TenentController::class);
    Route::resource('leases', LeaseController::class);
    Route::resource('utilities', UtilitiesController::class);
    Route::resource('invoice', InvoiceController::class);
    Route::resource('payment', PaymentController::class);
    Route::resource('vacate_notice', VacateNoticeController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('report', ReportController::class);
});


##### landlord routes #####
Route::prefix('landlord')->name('landlord.')->middleware('auth')->group(function () {
    Route::get('/', [StaterkitController::class, 'home'])->name('home');
    Route::get('dashboard', [StaterkitController::class, 'home'])->name('home');
    Route::resource('document', DocumentController::class);
    Route::resource('leases', LandlordLeaseController::class);
    Route::resource('payment', LandLoardPaymentController::class);
    // Route::get('profile', [ProfileController::class,'index']);

    Route::resource('properties', LandloardPropertyController::class);
    Route::resource('vacate_notice', LandloardVacateNoticeController::class);
});

###### Tenant routes ######
Route::prefix('tenant')->name('tenant.')->middleware('auth')->group(function () {
    Route::get('/', [StaterkitController::class, 'home'])->name('home');
    Route::get('dashboard', [StaterkitController::class, 'home'])->name('home');
    Route::resource('document', TenantDocumentController::class);
    Route::resource('invoice', TenantInvoiceController::class);
    Route::resource('leases', TenantLeaseController::class);
    Route::resource('payment', TenantPaymentController::class);
    // Route::resource('profile', TenantProfileController::class);
    Route::resource('vacate_notice', TenantVacateNoticeController::class);
});
// Route Components
Route::get('layouts/collapsed-menu', [StaterkitController::class, 'collapsed_menu'])->name('collapsed-menu');
Route::get('layouts/full', [StaterkitController::class, 'layout_full'])->name('layout-full');
Route::get('layouts/without-menu', [StaterkitController::class, 'without_menu'])->name('without-menu');
Route::get('layouts/empty', [StaterkitController::class, 'layout_empty'])->name('layout-empty');
Route::get('layouts/blank', [StaterkitController::class, 'layout_blank'])->name('layout-blank');





// locale Route
// Route::get('lang/{locale}', [LanguageController::class, 'swap']);
