<?php

use App\Http\Controllers\ConsommateurController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LouerController;
use App\Http\Controllers\MaisonController;
use App\Http\Controllers\Public\MaisonsController;
use App\Http\Controllers\public\PublicController;
use App\Http\Controllers\Public\TerrainsController;
use App\Http\Controllers\TerrainController;
use App\Http\Controllers\VendeurController;
use App\Models\Consommateur;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/*
================================================================================================
=========================================== PUBLIC =============================================
================================================================================================
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});

Route::get("/", [PublicController::class, 'index']);
Route::get("/home", [PublicController::class, 'index']);

Route::get("/contact", [PublicController::class, 'afficherContact'])->name('contact.afficherContact');
Route::get("/about", [PublicController::class, 'afficherAbout'])->name('about.afficherAbout');
Route::get("/activites", [PublicController::class, 'afficherActivites'])->name("activites.afficherActivites");

/*
 ====================================
 ======== Public Maisons
 ====================================
*/

Route::get("/maisons", [MaisonsController::class, 'allMaisons'])->name('maisons.allMaisons');
Route::get("/public/maison/{id}", [MaisonsController::class, 'getMaison']);

Route::get("/terrains", [TerrainsController::class, 'allTerrains'])->name('terrains.allTerrains');


/*
================================================================================================
============================================ ADMIN =============================================
================================================================================================
*/
Route::get("/login", [LoginController::class, 'show'])->name('login.show');

Route::post("/login", [LoginController::class, 'login'])->name('login.login');


// 
//  Must Be Authentifier
// 
Route::group(['middleware' => ['auth']], function(){
    
    Route::get('/admin', [DashboardController::class, 'index'])->name("admin.index");
    
    Route::get("/logout", [LoginController::class, 'logout'])->name('logout.logout');

    /*
    ===================================
    ========= Maisons
    ===================================
    */

    Route::get('/maison', [MaisonController::class, 'index'])->name('maison.index');

    Route::get('/ajouterMaison', [MaisonController::class, 'ajouter'])->name('ajouterMaison.ajouter');

    Route::post('/storeMaison', [MaisonController::class, 'store'])->name('storeMaison.store');

    Route::get('/modifierMaison/{id}', [MaisonController::class, 'modifier'])
    ->where('id', '\d+')
    ->name('modifierMaison.modifier');

    Route::delete('/deleteimage/{id}',[MaisonController::class,'deleteimage']);


    Route::post('/updateMaison', [MaisonController::class, 'update'])->name('updateMaison.update');

    Route::get('/supprimerMaison/{id}', [MaisonController::class, 'supprimer'])
    ->where('id', '\d+')
    ->name('supprimerMaison.supprimer');

    Route::get('/detailsMaison/{id}', [MaisonController::class, 'details'])
    ->name('detailsMaison.details');

        
    /*
    ===================================
    ========= Consommateur
    ===================================
    */
    Route::get('/consommateur', [ConsommateurController::class, 'index'])->name('consommateur.index');

    Route::get('/ajouterConsommateur', [ConsommateurController::class, 'ajouter'])->name('ajouterConsommateur.ajouter');

    Route::post('/storeConsommateur', [ConsommateurController::class, 'store'])->name('storeConsommateur.store');

    Route::get('/modifierConsommateur/{id}', [ConsommateurController::class, 'modifier'])
    ->where('id', '\d+')
    ->name('modifierConsommateur.modifier');
    Route::post('/updateConsommateur', [ConsommateurController::class, 'update'])->name('updateConsommateur.update');
    Route::get('/supprimerConsommateur/{id}', [ConsommateurController::class, 'supprimer'])
    ->where('id', '\d+')
    ->name('supprimerConsommateur.supprimer');

    Route::get('/detailsConsommateur/{id}', [ConsommateurController::class, 'details'])
    ->name('detailsConsommateur.details');

    /*
    ===================================
    ========= Vendeur
    ===================================
    */
    Route::get('/vendeur', [VendeurController::class, 'index'])->name('vendeur.index');

    Route::get('/ajouterVendeur', [VendeurController::class, 'ajouter'])->name('ajouterVendeur.ajouter');

    Route::post('/storeVendeur', [VendeurController::class, 'store'])->name('storeVendeur.store');

    Route::get('/modifierVendeur/{id}', [VendeurController::class, 'modifier'])
    ->where('id', '\d+')
    ->name('modifierVendeur.modifier');

    Route::post('/updateVendeur', [VendeurController::class, 'update'])->name('updateVendeur.update');

    Route::get('/supprimerVendeur/{id}', [VendeurController::class, 'supprimer'])
    ->where('id', '\d+')
    ->name('supprimerVendeur.supprimer');

    Route::get('/detailsVendeur/{id}', [VendeurController::class, 'details'])
    ->name('detailsVendeur.details');

    /*
    ===================================
    ========= Louer
    ===================================
    */
    Route::get('/louer', [LouerController::class, 'index'])->name('louer.index');

    Route::get('/ajouterLouer', [LouerController::class, 'ajouter'])->name('ajouterLouer.ajouter');

    Route::post('/storeLouer', [LouerController::class, 'store'])->name('storeLouer.store');

    Route::get('/modifierLouer/{id}', [LouerController::class, 'modifier'])
    ->where('id', '\d+')
    ->name('modifierLouer.modifier');

    Route::post('/updateLouer', [LouerController::class, 'update'])->name('updateLouer.update');

    Route::get('/supprimerLouer/{id}', [LouerController::class, 'supprimer'])
    ->where('id', '\d+')
    ->name('supprimerLouer.supprimer');

    Route::get('/detailsLouer/{id}', [LouerController::class, 'details'])
    ->name('detailsLouer.details');

});

/*
    ===================================
    ========= Terrain
    ===================================
    */

    Route::get('/terrain', [TerrainController::class, 'index'])->name('terrain.index');

    Route::get('/ajouterTerrain', [TerrainController::class, 'ajouter'])->name('ajouterTerrain.ajouter');

    Route::post('/storeTerrain', [TerrainController::class, 'store'])->name('storeTerrain.store');

    Route::get('/modifierTerrain/{id}', [TerrainController::class, 'modifier'])
    ->where('id', '\d+')
    ->name('modifierTerrain.modifier');

    Route::post('/updateTerrain', [TerrainController::class, 'update'])->name('updateTerrain.update');

    Route::get('/supprimerTerrain/{id}', [TerrainController::class, 'supprimer'])
    ->where('id', '\d+')
    ->name('supprimerTerrain.supprimer');

    Route::get('/detailsTerrain/{id}', [TerrainController::class, 'details'])
    ->name('detailsTerrain.details');
