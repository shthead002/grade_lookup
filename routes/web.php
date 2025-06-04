<?php

use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SemesterController;
use App\Models\Semester;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Stage 1 Academic Year
    Route::resource('/academic_year', AcademicYearController::class);
    Route::get('/academic_year/change_status/{academicYear}', [AcademicYearController::class, 'changeStatus'])->name('academic_year.status_change');

    //Stage 2 Semester
    Route::get('/semester/{academicYear}', [SemesterController::class, 'index'])->name('semester.index');
    Route::get('/semester/{academicYear}/{semester}', [SemesterController::class, 'edit'])->name('semester.edit');
    Route::get('/print/{academicYear}/{semester}', [SemesterController::class, 'print'])->name('semester.print');
    Route::put('/semester/{academicYear}/{semester}', [SemesterController::class, 'update'])->name('semester.update');
});

require __DIR__ . '/auth.php';
