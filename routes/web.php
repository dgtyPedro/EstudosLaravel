<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudosController;
use App\Http\Controllers\Home;

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

Route::get('/', [Home::class, 'index']);

Route::get('/estrutura', [Home::class, 'estrutura']);

Route::get('/rotas', [Home::class, 'rotas']);

Route::get('/controllers', [Home::class, 'controllers']);

Route::get('/views&blade', [Home::class, 'viewsandblade']);

Route::get('/models', [Home::class, 'models']);



Route::prefix('/crud')->group(function(){
    Route::get('/', [Home::class, 'crud']);

    Route::post('add', [Home::class, 'crud'])->name('crud.add');

    Route::post('edit', [Home::class, 'crud'])->name('crud.edit');

    Route::get('delete', [Home::class, 'crud'])->name('crud.del');
});

















Route::prefix('/Estudos')->group(function(){ /* GRUPO DE ROTAS COM PREFIXO INICIAL IGUAL */

    Route::get('Controllers', [EstudosController::class, 'index']);

    Route::get('Request', [EstudosController::class, 'request']);
    Route::post('Request', [EstudosController::class, 'request']);

    Route::get('varglobal', [EstudosController::class, 'varglobal']);

    /* GRUPO DE ROTAS INDEPENDENTES, SEM CONTROLLER */

    Route::view('/home', 'index'); /* ROUTE VIEW NORMAL */
    Route::get('/home/{texto}', function ($texto) { /* VIEW COM GET */
        echo view('estudos.index');
        echo $texto;
    });


    Route::get('/base', function () { 
        echo url('/'); /* BASE_URL() NO LARAVEL */
    });


    Route::get('/variavel/{string}', function ($string){ /* REGEX */
        echo 'o secret é uma palavra ' . $string;
    })->where('string', '[a-z]+');


    Route::get('/variavel/{number}', function ($number){  /* ROUTESERVICEPROVIDER */
        echo 'o secret é um numero ' . $number;
    });


    Route::get('/Rota-Nomeada', function (){  /* Rota Nomeada com Link*/
        echo 'Essa rota é nomeada </br>';
        echo 'Link dela: ' . route('rota1');
    })->name('rota1');


    Route::get('/redirect', function (){  /* Redirecionamento para Rotas com Nome*/
        echo 'Redirecionamento para: ' . route('rota1') . '</br>';
        echo redirect()->route('rota1');
    });

});


Route::fallback(function (){ /* Fallback para Rotas inexistentes*/
    echo  'Faz tempo que não ouço esse nome';
});