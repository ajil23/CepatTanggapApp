<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\AmbulanceController;
use App\Http\Controllers\backend\NakesController;
use App\Http\Controllers\backend\PasienController;
use App\Http\Controllers\Backend\PusatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirects', [HomeController::class,"index"])->middleware('disable_back_btn')->middleware('auth');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin.index', function () {
        return view('admin.index');
    })->name('admin.index');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', [AdminController::class, 'perform'])->name('logout.perform');
 });

Route::middleware(['auth'])->group(function() {
    Route::get('/nakes/view',[NakesController::class, 'NakesView'])->name('nakes.view');
    Route::get('/ambulance/view',[AmbulanceController::class, 'AmbulanceView'])->name('ambulance.view');
    Route::get('/pusat/view',[PusatController::class, 'PusatView'])->name('pusat.view');
    Route::get('/pasien/view',[PasienController::class, 'PasienView'])->name('pasien.view');
});