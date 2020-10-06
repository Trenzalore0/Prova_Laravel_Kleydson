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



Route::get('/', 'Site\TabeliaoController@index')
  ->name('tabeliao.index');

Route::get('/tabeliao/criar', 'Site\TabeliaoController@create')
  ->name('tabeliao.create');

Route::post('/tabeliao/salvar', 'Site\TabeliaoController@save')
  ->name('tabeliao.store');

Route::get('/tabeliao/edit/{id}', 'Site\TabeliaoController@show')
  ->name('tabeliao.edit');

Route::put('/tabeliao/update/{id}', 'Site\TabeliaoController@update')
  ->name('tabeliao.update');

Route::delete('/tabeliao/delete/{id}', 'Site\CertidaoController@delete')
  ->name('tabeliao.delete');



Route::get('/contrato', 'Site\ContratoController@index')
  ->name('contrato.index');

Route::get('/contrato/criar', 'Site\ContratoController@create')
  ->name('contrato.create');

Route::post('/contrato/salvar', 'Site\ContratoController@save')
  ->name('contrato.store');

Route::get('/contrato/edit/{id}', 'Site\ContratoController@show')
  ->name('contrato.edit');

Route::put('/contrato/update/{id}', 'Site\ContratoController@update')
  ->name('contrato.update');

Route::delete('/contrato/delete/{id}', 'Site\ContratoController@delete')
  ->name('contrato.delete');


Route::get('/certidao', 'Site\CertidaoController@index')
  ->name('certidao.index');

Route::get('/certidao/criar', 'Site\CertidaoController@create')
  ->name('certidao.create');

Route::post('/certidao/salvar', 'Site\CertidaoController@save')
  ->name('certidao.store');

Route::get('/certidao/edit/{id}', 'Site\CertidaoController@show')
  ->name('certidao.edit');

Route::put('/certidao/update/{id}', 'Site\CertidaoController@update')
  ->name('certidao.update');

Route::delete('/certidao/delete/{id}', 'Site\CertidaoController@delete')
  ->name('certidao.delete');
