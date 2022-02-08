<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        if (strpos(url()->current(), 'delete') !== false){
            $sql = DB::table('roadmap')->where('id', '=', $_GET['id'])->delete();
        }

        if (strpos(url()->current(), 'add') !== false){
            $sql = DB::table('roadmap')->insert([
                'subject_name' => $_POST['subject_name'],
                'type' => $_POST['type'],
                'time_expected' => $_POST['time_expected'],
                'is_completed' => $_POST['is_completed']
            ]);
        }

        if (strpos(url()->current(), 'edit') !== false){
            $sql = DB::table('roadmap')->where('id', $_POST['id'])->update([
                'subject_name' => $_POST['subject_name'],
                'type' => $_POST['type'],
                'time_expected' => $_POST['time_expected'],
                'is_completed' => $_POST['is_completed']
            ]);
        }
        
        $data['roadmap'] = DB::select('SELECT * FROM roadmap');
        echo view('crud', $data);
    }
}
