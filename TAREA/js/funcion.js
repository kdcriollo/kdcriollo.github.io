
function seleccionFig(){
	let fig = document.getElementById('fig');
	let figura = fig.value;

	if(figura == "cuadrado"){
		document.getElementById('lado_1').disabled=false;

	}else if(figura == "rectangulo"){
		document.getElementById('lado_1').disabled=false;
		document.getElementById('lado_2').disabled=false;

	}else {
		document.getElementById('lado_1').disabled=false;
		document.getElementById('lado_2').disabled=false;
		document.getElementById('lado_3').disabled=false;
		
	}

}
