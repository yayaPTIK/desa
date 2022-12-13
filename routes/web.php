<?php

use Illuminate\Support\Facades\Route;
// controller admin
use App\Http\Controllers\KKController;
use App\Http\Controllers\DusunController;
use App\Http\Controllers\Admin\SktmsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddKkController;
use App\Http\Controllers\KtpsController;
use App\Http\Controllers\KadesController;
use App\Http\Controllers\AdminDomisiliController;
use App\Http\Controllers\KematiansController;
use App\Http\Controllers\KelahiransController;

// controller user
use App\Http\Controllers\SktmController;
use App\Http\Controllers\UserKkController;
use App\Http\Controllers\KtpController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\DomisiliController;
use App\Http\Controllers\KelahiranController;

use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    
    Route::resource('dusun', DusunController::class);
    Route::resource('kk', KKController::class);
    Route::resource('sktms', SktmsController::class);  
    Route::resource('kades', KadesController::class);  
    Route::resource('ktps', KtpsController::class);  
    Route::resource('domisilis', AdminDomisiliController::class);
    Route::resource('kelahirans', KelahiransController::class);
    Route::resource('kematians', KematiansController::class);
    Route::get('kk-add/{kk}', [AddKkController::class, 'add'])->name('addkk'); 
    Route::post('/kk-add-store/{kk}', [AddKkController::class, 'store'])->name('addkk.store');
    Route::post('/kk-add-destroy/{id}', [AddKkController::class, 'destroy'])->name('addkk.destroy');
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::resource('sktm', SktmController::class);
    Route::resource('kartu', UserKkController::class);
    Route::resource('Kematian', KematianController::class);
    Route::resource('kelahiran', KelahiranController::class);
    Route::resource('ktp', KtpController::class);
    Route::resource('domisili', DomisiliController::class);
    Route::get('domisili-ajukan', [DomisiliController::class, 'ajukan'])->name('domisili.ajukan');
    Route::post('domisili-ajukan-store', [DomisiliController::class, 'ajukanStore'])->name('domisili.ajukan.store');
});
Route::resource('user', UserController::class);
Route::post('user/avatar/{id}', [UserController::class, 'avatar'])->name('avatar');
