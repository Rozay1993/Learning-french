<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserManageController;
use App\Http\Controllers\Client\BookController;
use App\Http\Controllers\Client\Home\HomeController;
use App\Http\Controllers\LandingController;
use App\Models\Advertisement;
use Illuminate\Support\Facades\Route;

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

$controller_path = 'App\Http\Controllers';

// Main Page Route
// Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');

Route::get('/', function(){
    return redirect('/client/home');
})->name('landing');

Route::prefix('client')->middleware('auth', 'verified')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('client-home');
    Route::get('book/{chapter}', [BookController::class, 'index'])->name('chapter');
});

Route::prefix('admin')->middleware('auth', 'verified', "blockgeneraluser")->name('admin-')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [UserManageController::class, 'index'])->name('users');
    Route::put('/users/{id}/{status}', [UserManageController::class, 'userstatuschange'])->name('user-status-change');
    Route::delete('/users/{id}', [UserManageController::class, 'destroy'])->name('user-delete');
    
    ///////////////////////////////////////////////////////////////////////
    
    // Route::get('/advertisement', [Advertisement::class , 'index'])->name('advertisement');
    // Route::get('/advertisement/{id}/create', [Advertisement::class, 'create'])->name('advertisement-create');
    // Route::post('/advertisement/{id}', [Advertisement::class, 'store'])->name('advertisement-store');
    // Route::get('/advertisement/{id}/edit', [Advertisement::class, 'edit'])->name('advertisement-edit');
    // Route::put('/advertisement/{id}', [Advertisement::class, 'update'])->name('advertisement-update');
    // Route::put('/advertisement/{id}/{status}', [Advertisement::class, 'advertisementstatuschange'])->name('advertisement-status-change');
    // Route::delete('/advertisement/{id}', [Advertisement::class, 'destroy'])->name('advertisement-destroy');
});
// pages
// Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
// Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
// Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
// Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
// Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

require __DIR__.'/auth.php';