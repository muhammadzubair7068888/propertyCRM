<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\LanguageController;

use App\Http\Controllers\landlord\DocumentController;
use App\Http\Controllers\landlord\LeaseController as LandlordLeaseController;
use App\Http\Controllers\landlord\LogoutController;
use App\Http\Controllers\landlord\PaymentController as LandLoardPaymentController;
use App\Http\Controllers\landlord\ProfileController;
use App\Http\Controllers\landlord\PropertyController as LandloardPropertyController;
use App\Http\Controllers\landlord\VacateNoticeController as LandloardVacateNoticeController;

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

Route::prefix('landlord')->name('landlord.')->middleware('auth')->group(function () {
    Route::get('/', [StaterkitController::class, 'home'])->name('home');
    Route::get('dashboard', [StaterkitController::class, 'home'])->name('home');
    Route::resource('document', DocumentController::class);
    Route::resource('leases', LandlordLeaseController::class);
    Route::resource('payment', LandLoardPaymentController::class);
    Route::resource('profile', ProfileController::class);
    Route::post('update/{id}', [ProfileController::class,'update'])->name('update');
    // Route::get('profile', [ProfileController::class,'index']);

    Route::resource('properties', LandloardPropertyController::class);
    Route::get('property/show/{id}', [LandloardPropertyController::class,'show'])->name('property.show');
    Route::resource('vacate_notice', LandloardVacateNoticeController::class);
    Route::get('view/vacate_notice', [LandloardVacateNoticeController::class,'view'])->name('view');
});


// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);


