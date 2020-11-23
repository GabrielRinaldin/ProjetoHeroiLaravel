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
    Route::get('heroi', 'App\Http\Controllers\HeroisController@index')->name('heroi');
    Route::get('heroi/create','App\Http\Controllers\HeroisController@new')->name('new');
    Route::post('heroi/create', 'App\Http\Controllers\HeroisController@create')->name('create');
    Route::get('heroi/update/{heroi}/', 'App\Http\Controllers\HeroisController@edit')->name('edit');
    Route::patch('heroi/update/{heroi}/', 'App\Http\Controllers\HeroisController@update')->name('update');
    Route::post('heroi/update/{heroi}/', 'App\Http\Controllers\HeroisController@update')->name('update');
    Route::get('heroi/delete/{heroi}/', 'App\Http\Controllers\HeroisController@delete')->name('delete');
    Route::delete('heroi/delete/{heroi}', 'App\Http\Controllers\HeroisController@destroy')->name('destroy');
    /** */

    /** Rota para crud de identidade secreta*/
    Route::get('heroi/identity/{heroi}', 'App\Http\Controllers\IdentidadesController@index')->name('identity');
    Route::get('heroi/identity/{heroi}/create', 'App\Http\Controllers\IdentidadesController@new')->name('newIdentity');
    Route::post('heroi/identity/{heroi}/create', 'App\Http\Controllers\IdentidadesController@create')->name('createIdentity');
    Route::get('heroi/identity/{heroi}/delete', 'App\Http\Controllers\IdentidadesController@delete')->name('deleteIdentity');
    Route::delete('heroi/identity/{heroi}/delete', 'App\Http\Controllers\IdentidadesController@destroy')->name('destroyIdentity');

    /** Rota para crud de ARMAS */
    Route::get('heroi/arma/{heroi}', 'App\Http\Controllers\ArmasController@index')->name('arma');
    Route::get('heroi/arma/{heroi}/create', 'App\Http\Controllers\ArmasController@new')->name('newArma');
    Route::post('heroi/arma/{heroi}/create', 'App\Http\Controllers\ArmasController@create')->name('createArma');
    /** */

    /**Rota para crud Vilão */
    Route::get('vilao', 'App\Http\Controllers\ViloesController@index')->name('vilao');
    Route::get('vilao/create', 'App\Http\Controllers\ViloesController@new')->name('newVilao');
    Route::post('vilao/create', 'App\Http\Controllers\ViloesController@create')->name('createVilao');
    /** */

    /** Rota para crud batalha */
    Route::get('batalha', 'App\Http\Controllers\BatalhasController@index')->name('batalha');
    Route::get('batalha/create', 'App\Http\Controllers\BatalhasController@new')->name('newBatalha');
    Route::post('batalha/create', 'App\Http\Controllers\BatalhasController@create')->name('createBatalha');
    /** */

    /**Rota para crud HeroiBatalha */
    Route::get('batalha/{batalha}/heroi', 'App\Http\Controllers\HeroisBatalhaController@index')->name('batalheroi');
    Route::get('batalha/{batalha}/heroi/create', 'App\Http\Controllers\HeroisBatalhaController@new')->name('newHeroiBatalha');
    Route::post('batalha/{batalha}/heroi/create', 'App\Http\Controllers\HeroisBatalhaController@create')->name('createHeroiBatalha');
    /** */

    /**Rota para crud VilaoBatalha */
    Route::get('batalha/{batalha}/vilao', 'App\Http\Controllers\ViloesController@index')->name('vilaobatalha');
    Route::get('batalha/{batalha}/vilao/create', 'App\Http\Controllers\ViloesController@new')->name('newVilaoBatalha');
    Route::post('batalha/{batalha}/vilao/create', 'App\Http\Controllers\ViloesController@create')->name('createVilaoBatalha');
    /** */
});

