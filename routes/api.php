<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/ola', function () {
    return 'Ola, Mundo!';
});

Route::post('/clientes', [ClienteController::class, 'store']); 