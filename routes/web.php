<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\JabatanController;
use App\Http\Controllers\backend\PermissionController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthenticatedSessionController::class, 'create'])->middleware('guest');

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::middleware(['role:super admin|admin'])->group(function () {
    Route::prefix('dashboard')->name('admin.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        // Route Users Settings
        Route::controller(UserController::class)->group(function () {
            Route::get('/users', 'index')->name('users')->middleware('permission:view-users');
            Route::get('/users/tambah', 'create')->name('users.create')->middleware('permission:create-users');
            Route::post('/users', 'store')->name('users.store')->middleware('permission:store-users');
            Route::get('/users/{user}', 'edit')->name('users.edit')->middleware('permission:edit-users');
            Route::patch('/users/{user}', 'update')->name('users.update')->middleware('permission:update-users');
            Route::delete('/users/{user}', 'destroy')->name('users.destroy')->middleware('permission:delete-users');
            Route::put('/users/change-role/{user}', 'changeRole')->name('users.role')->middleware('permission:change-role-users');
        });
        Route::controller(RoleController::class)->group(function () {
            Route::get('/roles', 'index')->name('roles')->middleware('permission:view-role');
            Route::post('/roles', 'store')->name('roles.store')->middleware('permission:create-role|store-role');
            Route::put('/roles/{role}', 'update')->name('roles.update')->middleware('permission:edit-role|update-role');
            Route::delete('/roles/{role}', 'destroy')->name('roles.delete')->middleware('permission:delete-role');
        });
        Route::controller(PermissionController::class)->group(function () {
            Route::get('/permission', 'index')->name('permission')->middleware('permission:view-permission');
            Route::post('/permission', 'store')->name('permission.store')->middleware('permission:create-permission|store-permission');;
            Route::put('/permission/{permission}', 'update')->name('permission.update')->middleware('permission:edit-permission|update-permission');
            Route::delete('/permission/{permission}', 'destroy')->name('permission.delete')->middleware('permission:delete-permission');
        });

        Route::resource('/jabatan', JabatanController::class)->except(['create', 'show', 'edit']);
    });
    // });
});

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
