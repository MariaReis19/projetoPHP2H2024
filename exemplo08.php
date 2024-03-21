<?php 

	$valor1 = 15.50;
	$valor2 = 20.00;
	$soma = 0;

	$soma = $valor1+$valor2;

	//criando uma função
	function somaValor(){
		$valor1=20;
		$valor2=30;
		$soma=0;

		$soma = $valor1+$valor2;

		echo $soma;
	}

	echo "A soma de $valor1 e $valor2 é $soma <br />";

	//executando a função ou chamando a função para ser executada
	somaValor();
?>