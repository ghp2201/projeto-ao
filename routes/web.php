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

Auth::routes();

Route::get('/', function () {
    return view('pagina-inicial.index');
});

Route::get('/linha-do-tempo', 'linhaDoTempo@index')->name('linha-do-tempo');

Route::post('/nova-publicacao', 'Publicacoes@nova')->name('nova-publicacao');
Route::get('/curtir/{id}', 'Publicacoes@curtir');
Route::get('/apagar/{id}', 'Publicacoes@apagar');
Route::get('/compartilhar/{id}', 'Publicacoes@compartilhar');

Route::get('/comentarios/{idPublicacao}', 'Comentarios@index');
Route::get('/comentarios/novo/{idPublicacao}', 'Comentarios@novo');

Route::get('/perfil/{id}', 'Perfis@index');
