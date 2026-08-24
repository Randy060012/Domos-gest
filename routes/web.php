<?php

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\BiensController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DemandeController as AdminDemandeController;
use App\Http\Controllers\admin\DemandeSurMesureController;
use App\Http\Controllers\admin\NewsletterController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\client\CatalogueController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\DemandeController;
use App\Http\Controllers\client\HomeController;
use Illuminate\Support\Facades\Route;

// Routes publiques (client)
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/get-types-by-location', [HomeController::class, 'getTypesByLocation'])->name('biens.get-types');
Route::get('/catalogue', [CatalogueController::class, 'index'])->name('liste.index');
Route::get('/details', [CatalogueController::class, 'details'])->name('details.home');
Route::get('/demande', [DemandeController::class, 'index'])->name('ask.index');
Route::post('/demande', [DemandeController::class, 'store'])->name('ask.store');
Route::post('/contact/interet', [ContactController::class, 'store'])->name('contact.interet');
Route::post('/newsletter', [ContactController::class, 'newsletter'])->name('newsletter');

// Redirection pour le middleware 'auth' → login admin
Route::get('/login', function () {
    return redirect('/admin/login');
});

// Routes d'authentification admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware(['auth', 'is_admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/parametres', [SettingsController::class, 'index'])->name('settings.index');
        Route::post('/parametres', [SettingsController::class, 'update'])->name('settings.update');

        Route::prefix('demandes')->name('demandes.')->group(function () {
            Route::get('/', [AdminDemandeController::class, 'index'])->name('index');
            Route::get('/{demande}', [AdminDemandeController::class, 'show'])->name('show');
        });

        Route::prefix('demandes-sur-mesure')->name('demandes-sur-mesure.')->group(function () {
            Route::get('/', [DemandeSurMesureController::class, 'index'])->name('index');
            Route::get('/{demandeSurMesure}', [DemandeSurMesureController::class, 'show'])->name('show');
        });

        Route::prefix('newsletter')->name('newsletter.')->group(function () {
            Route::get('/', [NewsletterController::class, 'index'])->name('index');
        });

        Route::prefix('produits')->name('produits.')->group(function () {
            Route::post('/{bien}/toggle-visibilite', [BiensController::class, 'toggleActif'])->name('toggle-visibilite');
            Route::get('/', [BiensController::class, 'index'])->name('index');
            Route::get('/creer', [BiensController::class, 'create'])->name('create');
            Route::post('/', [BiensController::class, 'store'])->name('store');
            Route::get('/{bien}', [BiensController::class, 'show'])->name('show');
            Route::get('/{bien}/editer', [BiensController::class, 'edit'])->name('edit');
            Route::put('/{bien}', [BiensController::class, 'update'])->name('update');
            Route::delete('/{bien}', [BiensController::class, 'destroy'])->name('destroy');
            Route::post('/upload', [BiensController::class, 'uploadImage'])->name('upload');
            Route::post('/revert', [BiensController::class, 'revertImage'])->name('revert');
        });
    });
});
