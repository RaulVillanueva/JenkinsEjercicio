<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AlumnosController extends Controller{

    public function getMethod(){
        return $this->index();
    }

    public function index(){
        return
        [
            [
                'nombre' => 'Raul Villanueva Hernandez',
                'matricula' => 16001061
            ]
        ];  
    }
}
