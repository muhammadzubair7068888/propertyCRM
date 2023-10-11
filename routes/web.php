<?php

use App\Http\Controllers\admin\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaterkitController;


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

require_once __DIR__.'/admin.php';
require_once __DIR__.'/landlord.php';
require_once __DIR__.'/tenant.php';

Route::get('/', [AuthController::class, 'login_page'])->name('login');
Route::get('login', [AuthController::class, 'login_page'])->name('login');
Route::get('attempt_login', [AuthController::class, 'login'])->name('login.attempt');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



// Route Components
Route::get('layouts/collapsed-menu', [StaterkitController::class, 'collapsed_menu'])->name('collapsed-menu');
Route::get('layouts/full', [StaterkitController::class, 'layout_full'])->name('layout-full');
Route::get('layouts/without-menu', [StaterkitController::class, 'without_menu'])->name('without-menu');
Route::get('layouts/empty', [StaterkitController::class, 'layout_empty'])->name('layout-empty');
Route::get('layouts/blank', [StaterkitController::class, 'layout_blank'])->name('layout-blank');





// locale Route
// Route::get('lang/{locale}', [LanguageController::class, 'swap']);
