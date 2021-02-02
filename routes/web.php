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
// questo file contiene le rotte gestite dalla nostra applicazione
// '/' equivale 
Route::get('/', function () {
    return view('welcome');
});
// pagina di prova
Route::get('/hello-world', function () {
    return view('hello-world');
});
