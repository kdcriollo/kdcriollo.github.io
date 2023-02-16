<?php

class rectangulo extends figura implements formulas{

	private $lado1;
	private $lado2;

	public function __construct($l1, $l2){
		$this->lado1 = $l1;
		$this->lado2 = $l2;
	}



	public function area(){
		$area = $this->lado1 * $this->lado2;
		return $area;
	}

	public function perimetro(){
		$perimetro = ($this->lado1 * 2)+ ($this->lado2 * 2);
		return $perimetro;

	}

	public function GetArea(){
		$area = $this->lado1 * $this->lado2;
		return $area;

	}
	    
	    
	public function GetPerimetro(){
		$perimetro = ($this->lado1 * 2)+ ($this->lado2 * 2);
		return $perimetro;

	}
	   
	    
	public function GetTipo(){
		return "Rectángulo";
		
	}
}
?>
