<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(){
        // $data['easteregg'] = 1;
        echo view('home');
    }

    public function estrutura(){
        echo view('estrutura');
    }

    public function rotas(){
        echo view('rotas');
    }

    public function controllers(){
        echo view('controllers');
    }

    public function viewsandblade(){
        echo view('views');
    }

    public function models(){
        echo view('models');
    }

    public function crud(){
        echo view('crud');
    }
}
