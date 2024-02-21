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

Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos','App\Http\Controllers\SobreNosController@sobrenos' )->name('site.sobrenos');
Route::get('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');
Route::post('/contato', 'App\Http\Controllers\ContatoController@salvar')->name('site.contato');
Route::get('/login','App\Http\Controllers\LoginController@login')->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/cliente','App\Http\Controllers\ClienteController@cliente')->name('app.cliente');

    Route::get('/fornecedores','App\Http\Controllers\FornecedoresController@index')->name('app.fornecedores');
    
    Route::get('/produtos','App\Http\Controllers\ProdutosController@produtos')->name('app.produtos');
});


Route::get('/teste/{p1}/{p2}','App\Http\Controllers\TesteController@teste')->name('teste');


Route::fallback(function(){
    echo 'Porra amigo, essa página aqui nao existe meu cumpadi volte para a pagina principal <a href="'.route('site.index').'">clicando aqui</a> meu parceito';
});
