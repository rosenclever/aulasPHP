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
		echo "<br/>$value";
	}
	if ($operacao = "primo") {
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
?>