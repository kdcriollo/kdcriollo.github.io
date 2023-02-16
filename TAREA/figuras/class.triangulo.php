<?php

class triangulo extends figura implements formulas{

	private $lado1 =0;
	private $lado2 =0;
	private $lado3 =0;

	public function __construct($l1, $l2, $l3){
		$this->lado1 = $l1;
		$this->lado2 = $l2;
		$this->lado3 = $l3;
	}



	public function area(){
		$semip = ($this->lado1 + $this->lado2 + $this->lado3)/2;
		$area = sqrt($semip * ($semip - $this->lado1) * ($semip - $this->lado2) * ($semip - $this->lado3));

		return $area;
	}

	public function perimetro(){
		$perimetro = ($this->lado1 + $this->lado2 + $this->lado3);
		return $perimetro;

	}

	public function GetArea(){
		$semip = ($this->lado1 + $this->lado2 + $this->lado3)/2;
		$area = sqrt($semip * ($semip - $this->lado1) * ($semip - $this->lado2) * ($semip - $this->lado3));

		return $area;
	}
	    
	    
	public function GetPerimetro(){
		$perimetro = ($this->lado1 + $this->lado2 + $this->lado3);
		return $perimetro;


	}
	   
	    
	public function GetTipo(){
		
		if($this->lado1 == $this->lado2 && $this->lado3 == $this->lado2){
			$triangulo =  "Triangulo Equilátero";

		} else if($this->lado1 == $this->lado2 || $this->lado2 == $this->lado3 || $this->lado1 == $this->lado3){
			$triangulo = " Triangulo Isósceles";

		}else if($this->lado1 != $this->lado2 && $this->lado2 != $this->lado3 && $this->lado1 != $this->lado3){
			$triangulo = " Triangulo Escaleno"; 

		}
		return $triangulo;
	}
	
}
?>
