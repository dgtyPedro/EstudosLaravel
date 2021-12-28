<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(){
        echo view('sidebar');
        echo view('home');
    }
}
