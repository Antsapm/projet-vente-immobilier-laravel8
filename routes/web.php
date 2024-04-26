<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InsertionController;
use App\Http\Controllers\TransactionController;

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

Route::get('/home', [HomeController::class, 'page'])->name('home');

//INSERTION HTTP
Route::post('/insertionTerrain', [InsertionController::class, 'traitement'])->name('insertionTerrain');
Route::post('/insertionCite', [InsertionController::class, 'cite'])->name('insertionCite');
Route::post('/insertionLogement', [InsertionController::class, 'logement'])->name('insertionLogement');
Route::post('/insertionAgence', [InsertionController::class, 'agence'])->name('insertionAgence');
Route::post('/insertionClient', [InsertionController::class, 'client'])->name('insertionClient');

//================================
//ACHAT HTTP

Route::post('/acheterCite', [TransactionController::class, 'achatCite'])->name('acheterCite');
Route::post('/acheterLogement', [TransactionController::class, 'achatLoge'])->name('acheterLogement');
Route::post('/acheterTerrain', [TransactionController::class, 'achatTerrain'])->name('acheterTerrain');

//================================

//VENTE HTTP

Route::post('/venteTerrain', [TransactionController::class, 'venteTerrain'])->name('venteTerrain');

//================================
//DETAIL HTTP

Route::post('/getDetailTerrain', [HomeController::class, 'getDetailTerrain'])->name('getDetailTerrain');
Route::post('/getDetailCite', [HomeController::class, 'getDetailCite'])->name('getDetailCite');
Route::post('/getDetailTrans', [TransactionController::class, 'getDetailTrans'])->name('getDetailTrans');
Route::post('/getTransactionTerrain', [TransactionController::class, 'getTransactionTerrain'])->name('getTransactionTerrain');

Route::post('/selectClient', [HomeController::class, 'selectClient'])->name('selectClient');

//================================
//require __DIR__.'/auth.php';
