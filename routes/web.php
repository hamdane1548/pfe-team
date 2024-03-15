<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Statistiquecontolleur;
use Illuminate\Http\Request;

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\about;
use App\Http\Controllers\contactcontrolleur;
use App\Http\Controllers\singlecontrolleur;
use Termwind\Components\Dd;

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
// get:lecture
//post::ajouter
//PUT:modifictaion complete
//PATCHE :modification partielle
//delete:supprimer
// example utilsiateur :nom => hamdane prenom =>oussama 
//PUT pour modifier le nom et /prenom tous les info 
// PATCH pour modifie par exampl suelement le nom 
Route::get('/',[homecontroller::class,'index']);
Route::get('/about',[about::class,'about']);
Route::get('/contact',[contactcontrolleur::class,'contact']);
Route::get('/single',[singlecontrolleur::class,'single']);


