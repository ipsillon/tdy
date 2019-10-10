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

    });
    
});

/*
Route::get('/admin', function() {

    return view('admin.index');
    
})->name('home')->middleware('auth');*/
