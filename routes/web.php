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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{texto}', function ($texto) {
    echo view('index');
    echo $texto;
});

Route::view('/home', 'index');

Route::get('/base', function () {
    echo url('/');
});
/* REGEX */

Route::get('/variavel/{string}', function ($string){
    echo 'o secret é uma palavra ' . $string;
})->where('string', '[a-z]+');


Route::get('/variavel/{number}', function ($number){
    echo 'o secret é um numero ' . $number;
});