<?php


class cuadrado extends figura implements formulas {

	private $lado1;

	public function __construct($l1){
		$this->lado1 = $l1;
	}


	public function area(){
		$area = $this->lado1*$this->lado1;
		return $area;
	}

	public function perimetro(){
		$perimetro = $this->lado1*4;
		return $perimetro;

	}

	public function GetArea(){
		$area = $this->lado1*$this->lado1;
		return $area;

	}
	    
	    
	public function GetPerimetro(){
		$perimetro = $this->lado1*4;
		return $perimetro;

	}
	   
	    
	public function GetTipo(){
		return "Cuadrado";

	}

}
?>
