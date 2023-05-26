<?php

use App\Http\Controllers\API\BadgeController;
use App\Http\Controllers\API\BankController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\LogoutController;
use App\Http\Controllers\API\PurchaseController;
use App\Http\Controllers\API\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::prefix('v1')->group(function () {
    Route::prefix('auth')->name('auth.')->group(function () {
        Route::post('register', [RegisterController::class, 'store'])->name('store');
        Route::post('login', [LoginController::class, 'login'])->name('login');
    });

    Route::prefix('badges')->name('badge.')->group(function () {
        Route::get('/', [BadgeController::class, 'index'])->name('index');
        Route::post('/', [BadgeController::class, 'store'])->name('store');
        Route::get('/{badge}', [BadgeController::class, 'show'])->name('show');
        Route::patch('/{badge}', [BadgeController::class, 'update'])->name('update');
        Route::delete('/{badge}', [BadgeController::class, 'destroy'])->name('destroy');
    });

    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::prefix('purchase')->name('purchase.')->group(function () {
            Route::post('', [PurchaseController::class, 'store'])->name('store');
        });
        Route::post('logout', [LogoutController::class, 'logout']);

        Route::get('banks', [BankController::class, 'getBank']);
        Route::post('add-bank-details', [BankController::class, 'addBankDetail']);
    });
});
