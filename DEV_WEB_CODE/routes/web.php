<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\ResponsableFiliereController;
use App\Http\Controllers\ChefDepartementController;
use App\Http\Controllers\HomeController;





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

#Hadi dial l home 
Route::get('/', [HomeController::class, 'index'])->name('home');

#Hado dial login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

#Hado dial dashboards
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});

#Hado dial profiles
Route::get('/profile', [ProfileController::class, 'showProfile']);

#Hado dial emploi
Route::get('/emploi', [EmploiController::class, 'showEmploi']);

#Hadi bach prof ydir annonce n les etudiants dialo
Route::post('/professor/add-announcement', [ProfessorController::class, 'addAnnouncement'])->name('professor.addAnnouncement');

#Hadi bach responsable filiere ydir annonce n les etudiant li fdak lfiliere
Route::post('/responsible-filiere/add-announcement', [ResponsableFiliereController::class, 'addAnnouncement'])->name('responsible-filiere.addAnnouncement');

#hadi n chef departement bach yzid annonce, either n students wla n home page
Route::post('/chef-departement/add-announcement', [ChefDepartementController::class, 'addAnnouncement'])->name('chef-departement.addAnnouncement');
