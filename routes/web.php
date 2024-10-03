<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('about');

Route::get('/contact', function () {
    return view('contact');
})->middleware(['auth', 'verified'])->name('contact');

//Route::get('/student', function () {
//    return view('Student.index');
//})->middleware(['auth', 'verified'])->name('Student.index');

//---

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Controller
Route::get('/student', [StudentController::class, 'index'])->middleware(['auth', 'verified'])->name('Student.index');
Route::get('/daftar', [StudentController::class, 'create'])->middleware(['auth', 'verified'])->name('Student.create');
Route::post('/student', [StudentController::class, 'store'])->middleware(['auth', 'verified'])->name('Student.store');


require __DIR__.'/auth.php';
