<?php

use Illuminate\Support\Facades\Route;

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


// metodo 1 per fornire variabili al mio blade.php (COMPACT)
Route::get('/', function () {
    $nome = 'Pietro';
    $cognome = 'Smusi';
    return view('home' , compact('nome' , 'cognome'));
});


// metodo 2 per fornire variabili usando un array associativo
Route::get('/about' , function (){

  $nome = 'Pietro';
  $cognome = 'Smusi';
  $data = [
     'nome' => $nome,
     'cognome' => $cognome
  ];


    return view('about' , $data);
});
