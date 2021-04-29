<?php
	echo "Seja bem-vindo!";
	$nome = $_POST["nome"];
	$idade = $_POST["idade"];
	$sexo = $_POST["sexo"];
	$conhecimentos[] = $_POST["con1"];
	$conhecimentos[] = $_POST["con2"];
	$conhecimentos[] = $_POST["con3"];
	$operacao = $_POST["operacao"];
	$primo = true;
	echo " $nome";
	echo "<br/>Você informou que tem $idade anos!";
	if ($sexo == "F") {
		echo "<br/>O sexo cadastrado é Feminino!";
	}
	else {
		echo "<br/>O sexo cadastrado é Masculino!";
	}
	foreach ($conhecimentos as $conhecimento => $value) {
		if ($value != "") {
			echo "<br/>$value";
		}
		
	}
	if ($operacao == "primo") {
		echo "<br/>A idade informada corresponde a um número ";
		for ($i=2; $i <= $idade/2 ; $i++) { 
			if ($idade%$i==0) {
				echo "não primo";
				$primo = false;
				break;
			}
		}
		if ($primo) {
			echo "primo";
		}
	}
	if ($operacao == "par" ) {
		if ($idade%2==0) {
			echo "<br/>A idade informada corresponde a um número PAR!";
		}
		else{
			echo "<br/>A idade informada corresponde a um número ÍMPAR!";
		}
		
	}
	if ($operacao == "fatorial") {
		echo "<br/>O fatorial da idade é ";
		$fat = 1;
		for ($i=1; $i <= $idade ; $i++) { 
			$fat *= $i;
		}
		echo "$fat";
	}
?>