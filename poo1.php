<?php
class Clase
{
	private $miembroPrivado; //Solo visible desde la misma clase
	protected $miembroProtegido; //Visible desde la clase o clases hijas
	public $miembroPublico; //Visible desde cualquier lugar
	function __construct()
	{
		$this->miembroPrivado = ""; //$this-> es obligatorio
		$this->miembroProtegido = ""; //$this-> es obligatorio
		$this->miembroPublico = ""; //$this-> es obligatorio
		echo ("Objeto creado, variables inicializadas<br/>");
	}
	private function FPrivada()	{
		$this->miembroPrivado = "Valor privado";
	}
	protected function FProtegida()	{
		$this->miembroProtegido = "Valor protegido";
	}
	public function FPublica()	{
		$this->FPrivada();
		$this->FProtegida();
	}
	function ImprimirDatos(){ //De forma predeterminada, los métodos son públicos
		echo ("Miembro privado: " . $this->miembroPrivado . "<br/>");
		echo ("Miembro protegido: " . $this->miembroProtegido . "<br/>");
		echo ("Miembro publico: " . $this->miembroPublico . "<br/>");
	}
	function __destruct() {
		$this->miembroPrivado = ""; //$this-> es obligatorio
		$this->miembroProtegido = ""; //$this-> es obligatorio
		$this->miembroPublico = ""; //$this-> es obligatorio
		echo ("Objeto destruido, variables eliminadas<br/>");
	}
}
$objeto = new Clase();
$objeto->FPublica();
$objeto->miembroPublico = "Valor público";
$objeto->ImprimirDatos();
?>