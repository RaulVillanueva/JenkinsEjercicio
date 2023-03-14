<?php

namespace Tests\Unit;
use Mockery;
use App\Http\Controllers\AlumnosController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AlumnosControllerTest extends TestCase{

    public function testIndexIsCalledOnce(){
    
        //Se crea el objeto simulado
        $mock = $this->getMockBuilder(AlumnosController::class)
            ->onlyMethods(['index'])
            ->getMock();

        //Esta es la prueba, en donde se espera que index() sea llamada solo una vez
        $mock->expects($this->once())->method('index');

        //Se llama a getMethod quien es el que llamará a index()
        $mock->getMethod();

        /*
            Si getMethod() llama al método index() del objeto simulado 
            exactamente una vez, la prueba pasará satisfactoriamente.
        
            Si getMethod() llama al método index() del objeto simulado 
            0 o más de 1 vez, la prueba no pasará satisfactoriamente.
        */
    }
}