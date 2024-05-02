<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

Route::middleware('auth')->group(function () {
    Route::get('/', [HotelController::class, "index"])->name("hotels.index");
    Route::delete('/hotels/{id}', [HotelController::class, "destroy"])->name("hotels.destroy");
    Route::post('/hotels', [HotelController::class, "AjouterHotel"])->name("hotels.store");
    Route::get('/hotels', [HotelController::class, "create"])->name("hotels.create");
});


