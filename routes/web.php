<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login'); // أو العودة لصفحة معينة حسب اسم الراوت عندك
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
use App\Http\Controllers\ReportController;

// صفحة عرض البلاغات
Route::get('/reports', [ReportController::class, 'index'])->name('reports.index')->middleware('auth');

// صفحة إنشاء بلاغ جديد
Route::get('/reports/create', [ReportController::class, 'create'])->name('reports.create')->middleware('auth');

// حفظ البلاغ
Route::post('/reports', [ReportController::class, 'store'])->name('reports.store')->middleware('auth');
require __DIR__.'/auth.php';
