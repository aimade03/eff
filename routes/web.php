<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterielController;
use App\Http\Controllers\EmployeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/materiels',[MaterielController::class,'AfficherListeMateriels']);
Route::post('/materiels',[MaterielController::class,'AjouterMateriels']);
Route::delete('/materiels/{materiel}',[MaterielController::class,'SupprimerMateriels']);
Route::get('/employes',[EmployeController::class,'AfficherListEmployes']);
Route::get('/employes/{employe}',[EmployeController::class,'consulterDetails']);
Route::get('/affectation/create/{employe}',[EmployeController::class,'create']);
Route::post('/affectation/{employe}',[EmployeController::class,'store']);
Route::delete('/affectation/{employe}/{materiel}',[EmployeController::class,'destroy']);
