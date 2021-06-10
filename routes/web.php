<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/',[StudentController::class,'index'])->name('index');
Route::get('add',[StudentController::class,'show'])->name('show');
Route::post('add',[StudentController::class,'create'])->name('create');
Route::get('edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::put('edit/{id}',[StudentController::class,'update'])->name('update');
Route::get('delete/{id}',[StudentController::class,'destroy'])->name('destroy');
