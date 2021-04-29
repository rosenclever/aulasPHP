<?php

	function calc_fp_nao_ajustados($ali, $ee, $ce){
		return $ali + $ee + $ce;
	}

	echo "<h1>Total de Pontos de Função Calculados</h1>";
	$_arquivos_logicos_internos = $_POST["arquivos_logicos_internos"];
	$_entradas_externas = $_POST["entradas_externas"];
	$_consultas_externas = $_POST["consultas_externas"];
	echo "Total de Arquivos Lógicos Internos: $_arquivos_logicos_internos</br>";
	echo "Total de Entradas Externas: $_entradas_externas</br>";
	echo "Total de Consultas Externas: $_consultas_externas</br>";
	$_fp_nao_ajustados = calcula_pontos_nao_ajustados();
	echo "Total de Pontos de Função não-ajustados: $_fp_nao_ajustados<br/>";

	echo "Total de Pontos de Função não ajustados com parâmetros: " .
	 calc_fp_nao_ajustados($_arquivos_logicos_internos, $_entradas_externas, $_consultas_externas);

	function calcula_pontos_nao_ajustados(){
		global $_arquivos_logicos_internos;
		global $_entradas_externas;
		global $_consultas_externas;
		return ($_arquivos_logicos_internos + $_entradas_externas + $_consultas_externas);
	}
?>