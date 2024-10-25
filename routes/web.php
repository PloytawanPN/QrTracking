<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\LoginMiddleware;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

Route::prefix('secure-admin-access')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'login'])->name('login')->middleware(LoginMiddleware::class);
    Route::middleware([RedirectIfAuthenticated::class])->group(function () {
        Route::get('/qrcode', [AdminController::class, 'QrCode'])->name('QrCode');
    });
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('admin.login');
})->name('logout');
