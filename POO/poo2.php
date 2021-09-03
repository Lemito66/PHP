<?php
    class Vehiculo{
        //public $marca;
        protected $marca;//ahora protegido
        function __construct($marca)
        {
            $this-> $marca = $marca;
        }
    }
    class Coche extends Vehiculo{
        function __construct($marca)
        {
            $this->marca=$marca;
        }
        function Imprimir(){
            echo($this->marca);
        }
    }
    
    $miCoche= new Coche("Toyota");
    $miCoche->Imprimir();    
    //echo($miCoche->marca);
