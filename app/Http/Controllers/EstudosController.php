<?php

/* COMANDO PARA CRIAR CONTROLLERS: 

php artisan make:controller NomeDoController

**/


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudosController extends Controller
{
    public function index(){
        echo 'Isso está sendo gerado em um Controller';
    }
}
