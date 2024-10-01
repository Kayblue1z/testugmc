<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class,'index']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('doctors',[HomeController::class,'doctors']);

Route::get('home',[HomeController::class,'home']);

Route::get('contact',[HomeController::class,'contact']);

Route::get('about',[HomeController::class,'about']);

Route::get('service',[HomeController::class,'service']);

Route::get('blog',[HomeController::class,'blog']);

Route::get('login',[HomeController::class,'login']);
