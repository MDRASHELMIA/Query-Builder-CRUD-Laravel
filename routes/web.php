<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'getData'])->name('home');
Route::get('/delete/{id}',[HomeController::class,'deleteItem'])->name('delete.item');

Route::get('/show/single/{id}',[HomeController::class,'showSingle'])->name('show');

Route::get('/form',[HomeController::class,'formShow'])->name('form');
Route::post('/form-submit-now',[HomeController::class,'formDataInsert'])->name('inset.item');

Route::get('/edit/{id}',[HomeController::class,'editPageShow'])->name('edit.page');
Route::post('/form/update',[HomeController::class,'updatePost'])->name('form.update');
