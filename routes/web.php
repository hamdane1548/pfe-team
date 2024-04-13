<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Statistiquecontolleur;
use Illuminate\Http\Request;



use App\Http\Controllers\AdminController;
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
// Routes pour les différentes pages
Route::get('/', [homecontroller::class, 'index']);
Route::get('/about', [about::class, 'about']);


Route::get('/contact', [contactcontrolleur::class, 'contact'])->name('contact');
Route::post('/login', [contactcontrolleur::class, 'login'])->name('login');




Route::get('/single', [singlecontrolleur::class, 'single']);

Route::post('/admin', [AdminController::class, 'admin'])->name('admin');
