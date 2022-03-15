<?php

use App\Http\Controllers\CarburantController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TracteurController;
use App\Http\Controllers\ChauffeurController;


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
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('recherche', [App\Http\Controllers\RechercheController::class, 'index'])->name('recherche.index');
    Route::post('recherche', [App\Http\Controllers\RechercheController::class, 'recherche'])->name('recherche.store');
    Route::resource('tracteurs', TracteurController::class);
    Route::resource('chauffeurs', ChauffeurController::class);
    Route::resource('carburants', CarburantController::class);
});





