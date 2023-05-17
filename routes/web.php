<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::post('/supports/create', [SupportController::class, 'store'])->name('supports.store');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contact', [SiteController::class, 'contact']);

Route::get('/', function (){
    return view('welcome');
});
