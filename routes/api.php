<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/tabeliao', 'Api\TabeliaoController@listAll');
Route::post('/tabeliao/salvar', 'Api\TabeliaoController@Save');
Route::get('/tabeliao/buscar/{id}', 'Api\TabeliaoController@Show');
Route::put('/tabeliao/atualizar/{id}', 'Api\TabeliaoController@Update');
Route::delete('/tabeliao/deletar/{id}', 'Api\TabeliaoController@Delete');


Route::get('/contrato', 'Api\ContratoController@listAll');
Route::post('/contrato/salvar', 'Api\ContratoController@Save');
Route::get('/contrato/buscar/{id}', 'Api\ContratoController@Show');
Route::put('/contrato/atualizar/{id}', 'Api\ContratoController@Update');
Route::delete('/contrato/deletar/{id}', 'Api\ContratoController@Delete');


Route::get('/certidao', 'Api\CertidaoController@listAll');
Route::post('/certidao/salvar', 'Api\CertidaoController@Save');
Route::get('/certidao/buscar/{id}', 'Api\CertidaoController@Show');
Route::put('/certidao/atualizar/{id}', 'Api\CertidaoController@Update');
Route::delete('/certidao/deletar/{id}', 'Api\CertidaoController@Delete');
