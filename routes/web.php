<?php

use App\Http\Controllers\client\CatalogueController;
use App\Http\Controllers\client\DemandeController;
use App\Http\Controllers\client\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('client.pages.home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/catalogue', [CatalogueController::class, 'index'])->name('liste.index');
Route::get('/details', [CatalogueController::class, 'details'])->name('details.home');
Route::get('/demande', [DemandeController::class, 'index'])->name('ask.index');


