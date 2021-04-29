<html>
  <head>
    <script language="javascript" charset="utf-8">
      function entradaDeDados(){
        tamanho = window.prompt("Informe o valor da diagonal principal:");
      }

    </script>
  </head>
<?php
  $tamanho = 3;
  $matriz[$tamanho][$tamanho];
  echo "<script>entradaDeDados();</script>";
  $valor_principal = "<script>document.write(tamanho);</script>";
  $demais_valores = 0;
  preencherMatriz($matriz, $tamanho, $valor_principal, $demais_valores);
  imprimirMatriz($matriz, $tamanho);

  function preencherMatriz(&$mat, $tamanho, $valPrinc, $outrosVal){
    for($linha = 1; $linha <= $tamanho; $linha++){
      for($coluna = 1; $coluna <= $tamanho; $coluna++){
        if($linha ==  $coluna)
          $mat[$linha][$coluna] = $valPrinc;
        else
          $mat[$linha][$coluna] = $outrosVal;
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
