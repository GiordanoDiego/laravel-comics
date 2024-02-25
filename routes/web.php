<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;




Route::get('/', function () {

    $configArray = config('data_dc');
    return view('welcome', compact('configArray'));
});

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
