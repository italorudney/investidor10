<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\CategoriasController;

Route::get('/listaNoticias', [NoticiasController::class, 'index']);
Route::get('/listaCategorias', [CategoriasController::class, 'index']);

Route::post('/novaNoticia', [NoticiasController::class, 'store']);
Route::post('/listaNoticiasFiltro', [NoticiasController::class, 'filtro']);

