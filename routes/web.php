<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirects', [HomeController::class, "index"])->name('dash');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HomeController::class, "index"])->name('dashboard');
    //admin
    Route::get('/addseller', [AdminController::class, "addsellers"])->name('admin.addseller');
    Route::post('/addseller/fuel', [AdminController::class, "fueladd"])->name('admin.addseller.fuel');
    Route::get('/request', [AdminController::class, "reqs"])->name('admin.request');
    Route::get('/request/view/{reqId}', [AdminController::class, "reqsview"])->name('admin.request.view');
    Route::get('/request/view/accept/{Id}', [AdminController::class, "accept"])->name('admin.request.accept');
    Route::get('/request/view/delete/{Id}', [AdminController::class, "delete"])->name('admin.request.delete');

    //seller
    Route::get('/fulrequest', [SellerController::class, "fuelreq"])->name('seller.reqfuel');
    Route::post('/fuelrequest', [SellerController::class, "req"])->name('seller.request');
});
