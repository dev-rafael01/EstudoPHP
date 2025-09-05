<?php

/**
 *   1. For – Contagem crescente 
 * Crie um código que use um for para imprimir  os números de 1 a 10, um em cada linha.
 * 
 * 
 * 2. For – Tabuada
 * Peça um número (pode ser fixo no código) e use um for para exibir a tabuada desse número, de 1 a 10.
 *  
 
 */
 for($i = 0; $i <=10; $i++){
    echo " $i <br>"; 
 }


echo '===========================================';
echo '<br/>';


$numero = 5;
$contador = 0;

for($contador; $contador <= 10; $contador++){
      echo $numero. "x" . $contador . " = " . ($numero * $contador). '<br/>';
    
    
}
