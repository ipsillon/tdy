<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// User needs to be authenticated to enter here.
Route::group(['middleware' => 'auth'], function () {
    
    Route::group(['prefix' => 'admin'], function() {
        
        Route::get('', [ 'uses' => '\App\Http\Controllers\AdminController@index', 'as' => 'admin.index']);

        Route::get('eixos', ['uses' => '\App\Http\Controllers\Admin\EixoController@index', 'as' => 'admin.eixos']);
        Route::get('eixos/adicionar', ['uses' => '\App\Http\Controllers\Admin\EixoController@adicionar', 'as' => 'admin.eixos.adicionar']);
        Route::post('eixos/salvar', ['uses' => '\App\Http\Controllers\Admin\EixoController@salvar', 'as' => 'admin.eixos.salvar']);
        Route::get('eixos/editar/{id}', ['uses' => '\App\Http\Controllers\Admin\EixoController@editar', 'as' => 'admin.eixos.editar']);
        Route::put('eixos/atualizar/{id}', ['uses' => '\App\Http\Controllers\Admin\EixoController@atualizar', 'as' => 'admin.eixos.atualizar']);
        Route::get('eixos/deletar/{id}', ['uses' => '\App\Http\Controllers\Admin\EixoController@deletar', 'as' => 'admin.eixos.deletar']);

        Route::get('itens', ['uses' => '\App\Http\Controllers\Admin\ItemController@index', 'as' => 'admin.itens']);
        Route::get('itens/adicionar', ['uses' => '\App\Http\Controllers\Admin\ItemController@adicionar', 'as' => 'admin.itens.adicionar']);
        Route::post('itens/salvar', ['uses' => '\App\Http\Controllers\Admin\ItemController@salvar', 'as' => 'admin.itens.salvar']);
        Route::get('itens/editar/{id}', ['uses' => '\App\Http\Controllers\Admin\ItemController@editar', 'as' => 'admin.itens.editar']);
        Route::put('itens/atualizar/{id}', ['uses' => '\App\Http\Controllers\Admin\ItemController@atualizar', 'as' => 'admin.itens.atualizar']);
        Route::get('itens/deletar/{id}', ['uses' => '\App\Http\Controllers\Admin\ItemController@deletar', 'as' => 'admin.itens.deletar']);

        Route::get('segmentos', ['uses' => '\App\Http\Controllers\Admin\SegmentoController@index', 'as' => 'admin.segmentos']);
        Route::get('segmentos/adicionar', ['uses' => '\App\Http\Controllers\Admin\SegmentoController@adicionar', 'as' => 'admin.segmentos.adicionar']);
        Route::post('segmentos/salvar', ['uses' => '\App\Http\Controllers\Admin\SegmentoController@salvar', 'as' => 'admin.segmentos.salvar']);
        Route::get('segmentos/editar/{id}', ['uses' => '\App\Http\Controllers\Admin\SegmentoController@editar', 'as' => 'admin.segmentos.editar']);
        Route::put('segmentos/atualizar/{id}', ['uses' => '\App\Http\Controllers\Admin\SegmentoController@atualizar', 'as' => 'admin.segmentos.atualizar']);
        Route::get('segmentos/deletar/{id}', ['uses' => '\App\Http\Controllers\Admin\SegmentoController@deletar', 'as' => 'admin.segmentos.deletar']);

        Route::get('eixos-itens', ['uses' => '\App\Http\Controllers\Admin\EixoItemController@index', 'as' => 'admin.eixos-itens']);
        
    });
    
});

/*
Route::get('/admin', function() {

    return view('admin.index');
    
})->name('home')->middleware('auth');*/
