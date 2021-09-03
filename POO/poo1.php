<?php
    class Clase{
        private $miembroPrivado;// Solo visible desde la misma clase
        protected $miembroProtegido;//Solo visibles desde la clase o clase hijas
        public $miembroPublico;//Visible desde cualquier lugar

        function __construct()
        {
            $this->miembroPrivado=""; //$this es obligatorio
            $this->miembroProtegido=""; //$this es obligatorio
            $this->miembroPublico=""; //$this es obligatorio
            echo("Objeto creado, variables inicializadas <br>");
        }
        private function FPrivada(){
            $this->miembroPrivado="Valor privado";
        }
        protected function FProtegido(){
            $this->miembroProtegido="Valor protegido";
        }
        public function FPublico(){
            $this->FPrivada();
            $this->FProtegido();
        }
        function ImprimirDatos(){ //De forma predeterminada, los métodos son publicos
            echo("Miembro privado: " . $this->miembroPrivado . "<br>");
            echo("Miembro protegido: " . $this->miembroProtegido . "<br>");
            echo("Miembro publico: " . $this->miembroPublico . "<br>");
        }
        function __destruct()
        {
            $this->miembroPrivado=""; //$this es obligatorio
            $this->miembroProtegido=""; //$this es obligatorio
            $this->miembroPublico=""; //$this es obligatorio
            echo("Objeto destruido, variables eliminadas <br>");
        }
    }
    $objeto = new Clase();
    $objeto->miembroPublico="Valor publico";
    $objeto->FPublico();
    $objeto->ImprimirDatos();
