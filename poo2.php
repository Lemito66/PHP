<?php
class Vehiculo
{
	protected $marca;
	function __construct($marca){
		$this->marca = $marca;
	}
}
class Coche extends Vehiculo
{
	function __construct($marca)
	{
		$this->marca = $marca;
	}
	function Imprimir() {
		echo ($this->marca);
	}
}
$micoche = new Coche("Toyota");
$micoche->Imprimir();
//echo ($micoche->marca);
?>