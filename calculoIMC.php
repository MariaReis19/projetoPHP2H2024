<?php 

	$nome = "Maria";
	$peso = 58;
	$altura = 1.72;
	$imc = $peso / ($altura * $altura);
	
	function calcular($peso, $altura){
		return($peso / ($altura * $altura));

	}

	printf("Olá $nome, o seu peso é $peso Kg e sua altura é $altura metros. <br> seu IMC é %.2f = " , $imc);

			if($imc<=18.5){

			echo("Abaixo do peso");

		}elseif ($imc>18.5 && $imc<24.10) {

			echo("Peso ideal");

		}elseif ($imc>=25.0 && $imc<=29.9) {

			echo("Levemente acima do peso");
		}elseif ($imc>=30.0 && $imc<=34.9) {

			echo("Obesidade grau I");

		}elseif ($imc>=35.0 && $imc<=39.9) {

			echo("Obesidade grau II(severa)");
		}else {
			echo("Obesidade III (Mórbida)");
		}
	



 ?>