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

    public function request(Request $request){
        $data['variavel'] = 'oi, eu sou uma variavel';
        $data['method'] = $request->method();
        $data['url'] = $request->url();
        
        // if (isset($_GET['nome'])){
        //     $data['nome'] = $_GET['nome'];
        // } IGUAL O CODEIGNITER

        //Forma Laravel: 
        // FORMA RUIM: if ($request->has('nome') && $request->input('nome') !=''){
        /* FORMA BOA:*/if ($request->filled('nome')){/* forma inversa de filled é missing:*/
            echo 'Nome Encontrado. <br/>';
        }else{
            echo 'Nada Encontrado. <br/>';
        }

        // Pega todos os inputs.
        $data += $request->all();

        // Pega alguns inputs: $data += $request->only(INPUTS HERE);
        // Pega todos exceto: $data += $request->except(INPUTS HERE);
       
        //caso não existir esse input, query absorve somente o GET
        //non-existant = input, NULO = else{}
        $data['null'] = $request->query('non-existant', 'NULO');


        echo view('estudos.request', $data);
    }

    public function varglobal(){
        echo view('estudos.global');
    }


}
