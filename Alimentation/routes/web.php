<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlimController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ProduitController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('inscrip');
// });
// Route::get('/acce', function () {
//     return view('accueil');
// });
//pour l'accueil
Route::get('accueil',[AlimController::class,'afficheAccueil'])->name('accueil');

//pour l'inscription
Route::get('inscrip',[AlimController::class,'afficheInscrip'])->name('inscrip');
Route::post('inscrip', [AlimController::class, 'afficheConnexion'])->name('inscrip');

//pour la connection
Route::get('conn',[AlimController::class,'afficheConnexion'])->name('conn');
Route::post('conn', [AlimController::class, 'ajoutproduit'])->name('conn');

//pour l'affiche des produits
Route::get('produit',[AlimController::class,'ajoutproduit'])->name('produit');
Route::get('liste',[AlimController::class,'afficheListe'])->name('liste');



Route::get('/produit', [AlimController::class, 'ajoutproduit'])->name('produit');
Route::post('/storeproduit', [AlimController::class, 'storeproduit'])->name('storeproduit');
Route::get('/delete/{id}', [AlimController::class, 'destroy'])->name('destroy.produit');
Route::get('/update', [AlimController::class, 'update'])->name('update');

Route::get('/index', [AlimController::class, 'index'])->name('index');


Route::get('/detail/{id}',[AlimController::class,'affichePresent'])->name('present');










Route::get('/crud.create', [CrudController::class, 'create'])->name('crud.create');
Route::post('/crud', [CrudController::class, 'store'])->name('crud.store');
Route::get('/crud/{crud}/edit', [CrudController::class, 'edit'])->name('crud.edit');
Route::post('/crud/{crud}/edit', [CrudController::class, 'accueil'])->name('accueil');

Route::put('/crud/{crud}', [CrudController::class, 'update'])->name('crud.update');
Route::delete('/crud/{crud}', [CrudController::class, 'destroy'])->name('crud.destroy');