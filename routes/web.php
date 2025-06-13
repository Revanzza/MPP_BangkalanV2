<?php

use App\Http\Controllers\AdminCaptchaController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\AgendaController;
use App\Http\Controllers\Web\InformationController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\OperationalHoursController;

Route::get('/admin-gateway', [AdminCaptchaController::class, 'showForm'])->name('admin.gateway');
Route::post('/admin-gateway', [AdminCaptchaController::class, 'verify'])->name('admin.gateway.verify');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profil/visi-misi', [ProfileController::class, 'visionMission'])->name('profile.vision-mission');
Route::get('/profil/fasilitas', [ProfileController::class, 'facilities'])->name('profile.facilities');
Route::get('/profil/dasar-hukum', [ProfileController::class, 'legalBasis'])->name('profile.legal-basis');
Route::get('/profil/tugas-fungsi', [ProfileController::class, 'tugasfungsi'])->name('profile.tugas-fungsi');
Route::get('/profil/prestasi-inovasi', [ProfileController::class, 'prestasiinovasi'])->name('profile.prestasi-inovasi');
Route::get('/profil/leadership', [ProfileController::class, 'leadership'])->name('profile.leadership');

Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::get('/agenda/{slug}', [AgendaController::class, 'show'])->name('agenda.show');

Route::get('/informasi', [InformationController::class, 'index'])->name('informations.index');
Route::get('/informasi/{id}', [InformationController::class, 'show'])->name('informations.show');

Route::get('/layanan', [ServiceController::class, 'index'])->name('services.index');
Route::get('/layanan/{id}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/jam-operasional', [YourController::class, 'showOperationalHours']);
