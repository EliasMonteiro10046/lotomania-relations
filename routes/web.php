<?php

use App\Http\Controllers\JogoController;
use App\Http\Controllers\ConcursoController;
use App\Http\Controllers\ResultadoController;
use Illuminate\Support\Facades\Auth;
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

/*
Rotas para os numeros cadastrados
*/
Route::any('jogo/search', [JogoController::class, 'search'])->name('jogo.search');
Route::resource('jogo', 'App\Http\Controllers\JogoController');
Route::get('/', [JogoController::class, 'home'])->name('jogo.home');


/*
Rotas para os numeros sorteados
*/
Route::any('concurso/search', [ConcursoController::class, 'search'])->name('concurso.search');
Route::get('concurso/acertos{id}', [ConcursoController::class, 'acertos'])->name('concurso.acertos');
Route::resource('concurso', 'App\Http\Controllers\ConcursoController');

Route::resource('resultado', ResultadoController::class);

// Route::get('/', function () {
//     return view('/pages/numerosjogados/home');
// });




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
