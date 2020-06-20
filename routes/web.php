<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('mois/{annee}', 'HomeController@showMois')->name('ShowMois');
Route::get('semaine/{annee}/{mois}', 'HomeController@showSemaine')->name('ShowSemaine');
Route::get('jour/{annee}/{mois}/{semaine}', 'HomeController@showJours')->name('showJours');
Route::post('/home', 'HomeController@GetData')->name('GetData');





