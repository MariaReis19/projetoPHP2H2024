<?php 
	
	$nome = "Armandino";

	function exibir(){
		$nome = "Josefina";

		echo "Valor da variável dentro da função " . $nome;
	}
	
	exibir(); 

	echo "<br /> Valor da variável fora da função " . $nome;
 ?>