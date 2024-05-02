<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RepasController;

Route::middleware('auth')->group(function () {

Route::get('/', [RepasController::class, "index"])->name("repas.index");
Route::delete('/repas/{id}', [RepasController::class, "destroy"])->name("repas.destroy");
Route::post('/repas', [RepasController::class, "AddRepas"])->name("repas.store");
Route::get('/repas', [RepasController::class, "create"])->name("repas.create");
});