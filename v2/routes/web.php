<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

Route::get('/', [HotelController::class, "index"])->name("hotels.index");
Route::delete('/hotels/{id}', [HotelController::class, "destroy"])->name("hotels.destroy");
Route::POST('/hotels', [HotelController::class, "AjouterHotel"])->name("hotels.store");
Route::GET('/hotels', [HotelController::class, "create"])->name("hotels.create");


