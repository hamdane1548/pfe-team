<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Statistiquecontolleur;
use Illuminate\Http\Request;



use App\Http\Controllers\AdminController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\about;
use App\Http\Controllers\contactcontrolleur;
use App\Http\Controllers\singlecontrolleur;
use App\Http\Controllers\dashbordcontrolleur;
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
<<<<<<< HEAD
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
Route::get('/admin',[dashbordcontrolleur::class,'dashbord']);
Route::get('/contact',[contactcontrolleur::class,'contact']);
Route::get('/single',[singlecontrolleur::class,'single']);
Route::post('/login', [contactcontrolleur::class, 'login'])->name('login');

=======
// Routes pour les différentes pages
Route::get('/', [homecontroller::class, 'index']);
Route::get('/about', [about::class, 'about']);
>>>>>>> 8bef04dbc4d8596d5dacaf22212423425e0a17d3


Route::get('/contact', [contactcontrolleur::class, 'contact'])->name('contact');
Route::post('/login', [contactcontrolleur::class, 'login'])->name('login');




Route::get('/single', [singlecontrolleur::class, 'single']);

Route::post('/admin', [AdminController::class, 'admin'])->name('admin');
