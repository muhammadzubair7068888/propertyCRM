<?php

use App\Http\Controllers\tenant\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\LanguageController;

use App\Http\Controllers\tenant\DocumentController as TenantDocumentController;
use App\Http\Controllers\tenant\LeaseController as TenantLeaseController;
use App\Http\Controllers\tenant\DashboardController;
use App\Http\Controllers\tenant\LogoutController as TenentLogoutController;
use App\Http\Controllers\tenant\PaymentController as TenantPaymentController;
use App\Http\Controllers\tenant\ProfileController as TenantProfileController;
use App\Http\Controllers\tenant\InvoiceController as TenantInvoiceController;
use App\Http\Controllers\tenant\VacateNoticeController as TenantVacateNoticeController;
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

Route::prefix('tenant')->name('tenant.')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('home');

    Route::resource('document', TenantDocumentController::class);
    Route::resource('invoice', TenantInvoiceController::class);
    Route::post('invoice/payment', [PaymentController::class,'paymentMethod'])->name('invoice.payment');
    Route::resource('leases', TenantLeaseController::class);
    Route::resource('paymentdone', TenantLeaseController::class);
    Route::resource('payment', TenantPaymentController::class);
    Route::resource('profile', TenantProfileController::class);
    Route::post('update/{id}', [TenantProfileController::class , 'update'])->name('update');
    // Route::resource('profile', TenantProfileController::class);
    Route::resource('vacate_notice', TenantVacateNoticeController::class);
    Route::get('view/vacate_notice', [TenantVacateNoticeController::class,'view'])->name('view');
});

// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);


