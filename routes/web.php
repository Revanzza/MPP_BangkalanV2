<?php

use App\Http\Controllers\AdminCaptchaController;

Route::get('/admin-gateway', [AdminCaptchaController::class, 'showForm'])->name('admin.gateway');
Route::post('/admin-gateway', [AdminCaptchaController::class, 'verify'])->name('admin.gateway.verify');
