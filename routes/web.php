<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);

Route::get('/login', function () {
    return 'Login';
});

Route::get('/clientes', function () {
    return 'Clientes';
});

Route::get('/fornecedores', function () {
    return 'Fornecedores';
});

Route::get('/contato', function () {
    return 'Contato';
});
