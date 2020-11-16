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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'web'], function()
{
    Route::auth();

    /**Rota para crud heroi */
    Route::get('heroi', ['uses' => 'heroi.index', 'uses' =>'App\Http\Controllers\HeroisController@index'])->name('heroi');
    Route::get('heroi/create', ['uses' => 'heroi.new', 'uses' =>'App\Http\Controllers\HeroisController@new'])->name('new');
    Route::post('heroi/create', ['uses' => 'heroi.create', 'uses' => 'App\Http\Controllers\HeroisController@create'])->name('create');
    Route::get('heroi/update/{heroi}/', ['uses' => 'heroi.edit', 'uses' => 'App\Http\Controllers\HeroisController@edit'])->name('edit');
    Route::patch('heroi/update/{heroi}/', ['uses' => 'heroi.update', 'uses' => 'App\Http\Controllers\HeroisController@update'])->name('update');
    Route::post('heroi/update/{heroi}/', ['uses' => 'heroi.update', 'uses' => 'App\Http\Controllers\HeroisController@update'])->name('update');
    Route::get('heroi/delete/{heroi}/', ['uses' => 'heroi.delete', 'uses' => 'App\Http\Controllers\HeroisController@delete'])->name('delete');
    Route::delete('heroi/delete/{heroi}', ['uses' => 'heroi.destroy', 'uses' => 'App\Http\Controllers\HeroisController@destroy'])->name('destroy');
    /** */

    /** Rota para crud de identidade secreta*/
    Route::get('heroi/identity/{heroi}', ['uses' => 'identidade.index', 'uses' => 'App\Http\Controllers\IdentidadesController@index'])->name('identity');
    Route::get('heroi/identity/{heroi}/create', ['uses' => 'identidade.new', 'uses' =>'App\Http\Controllers\IdentidadesController@new'])->name('newIdentity');
    Route::post('heroi/identity/{heroi}/create', ['uses' => 'identidade.create', 'uses' => 'App\Http\Controllers\IdentidadesController@create'])->name('createIdentity');
   
    /** */

});

