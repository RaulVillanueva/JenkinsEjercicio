<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AlumnosController extends Controller{

    public function getMethod(){
        $this->index();
        $this->index();
    }

    public function index(){
        return
        [
            [
                'nombre' => 'Raul Villanueva Hernandez',
                'matricula' => 16001061
            ],
            [
                'nombre' => 'Julian Perez Koo',
                'matricula' => 98001765
            ],
            [
                'nombre' => 'David Paredes Canche',
                'matricula' => 34001924
            ],
            [
                'nombre' => 'Gener Echeverria Chi',
                'matricula' => 15001743
            ],
        ];  
    }
}
