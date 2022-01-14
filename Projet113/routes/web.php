<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers;
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

// Accueil
Route::get('/', function () {
    return view('accueil');
})->name('Accueil');
// Societe -> (Qui sommes nous, Compétences, References, Partenaires)
Route::get('/Qui_sommes_nous', function () {
    return view('pages.Qui_sommes_nous');
})->name('Qui_sommes_nous');
Route::get('/Competences', function () {
    return view('pages.Competences');
})->name('Competences');
Route::get('/References', function () {
    return view('pages.References');
})->name('References');
Route::get('/Partenaires', function () {
    return view('pages.Partenaires');
})->name('Partenaires');
// Sapphyre Performance
// Competences
Route::get('/Performance',function(){
    return view('Saph_Perf.competences');
})->name('Savoir_faire');
// formations
Route::get('/Formation', 'App\Http\Controllers\formationController@alapage')->name('Formations');
// Sapphyre Ressources
// elements du menu

// Actus -> (Actualités, Galerie)
Route::get('/Actualites', function () {
    return view('pages.Actualites');
})->name('Actualites');
Route::get('/Galerie', function () {
    return view('pages.Galerie');
})->name('Galerie');
// Contacts
Route::get('/Contacts', function () {
    return view('pages.contacts');
})->name('Contacts');
// inscription pour un cours
Route::get('/enroll', 'App\Http\Controllers\auditeurController@set_inscription')->name('enroll');
Route::post('/enroll','App\Http\Controllers\auditeurController@giveMessage')->name("resultat");

//connexion au panneau admin
Route::get('/connexion', 'App\Http\Controllers\connexionController@formulaire');
Route::post('/connexion', 'App\Http\Controllers\connexionController@traitement');

// for inscription admin panel
Route::get('/vestiaire', 'App\Http\Controllers\userController@create');
Route::post('/vestiaire', 'App\Http\Controllers\userController@store');
Route::get('/journal', 'App\Http\Controllers\adminController@accueil')->name('journal');
Route::get('/deconnexion','App\Http\Controllers\adminController@deconnexion');

//
Route::resource('/auditeur','App\Http\Controllers\auditeurController');
Route::resource('/module','App\Http\Controllers\moduleController');
Route::resource('/formation','App\Http\Controllers\formationController');


// pages en travaux
Route::get('/busy', function(){
    return view('pages.busy');
})->name('occuped');

