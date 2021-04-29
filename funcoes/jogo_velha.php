<html>
  <head>
    <script language="javascript" charset="utf-8">
      function entradaDeDados(){
        jogador1 = window.prompt("Informe o nome do primeiro jogador:");
        jogador2 = window.prompt("Informe o nome do segundo jogador:");
      }

      function jogada(vez){
        linha = window.prompt("Jogador ")
      }

    </script>
  </head>
<?php
  $tamanho = 3;
  $matriz[$tamanho][$tamanho];
  echo "<script>entradaDeDados();</script>";
  preencherMatriz($matriz, $tamanho, " ");
  $fim = false;
  $vez = 1;
  while(!$fim){
    echo "<script>jogada($vez)";
  }
  imprimirMatriz($matriz, $tamanho);

  function preencherMatriz(&$mat, $tamanho, $val){
    for($linha = 1; $linha <= $tamanho; $linha++){
      for($coluna = 1; $coluna <= $tamanho; $coluna++){
        $mat[$linha][$coluna] = $val;
      }
    }
  }

  function imprimirMatriz($mat, $tam){
    for($linha = 1; $linha <= $tam; $linha++){
      for($coluna = 1; $coluna <= $tam; $coluna++){
        echo $mat[$linha][$coluna] . " ";
      }
      echo "<br/>";
    }
  }
 ?>
