<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('/login', [SessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');

Route::middleware('auth')->group(function(){
    //route da proteggere
});
