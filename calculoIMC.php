<?php 

	$nome = "Maria";
	$peso = 80;
	$altura = 1.65;
	$imc = $peso / ($altura * $altura);
	
	function calcular($peso, $altura){
		return($peso / ($altura * $altura));
		
		

	}

	echo "Olá $nome, o seu peso é $peso Kg e sua altura é $altura metros e seu IMC é " . $imc;
	



 ?>