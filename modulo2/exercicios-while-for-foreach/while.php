<?php

/**
 *  3. While – Contagem regressiva
 * 
 * Use um while para imprimir   os números de 10 até 1. Quando chegar no 1, imprima "Fim!"
 * 
 *  
 *  4. While – Soma até ultrapassar 100
 *  Crie uma variável soma = 0 e, usando um while, vá somando números inteiros começando do 1 até que a soma ultrapasse 100. No final, mostre o valor final da soma.
 * 
 *
 */

$contagem = 10;


while($contagem >= 1){
  
   echo $contagem . "<br/>";

    $contagem --;
}
 echo "fim!";

 echo "<br/>";
 echo "========================================". "<br/>" ;

 $soma = 0;
 $numero24 = 1;
 $subTotal = 0;

 while($numero24 <=100){

    echo $numero24;
    if($numero24 < 100){
        echo " + ";
    }
    $soma = $soma + $numero24;
    $numero24 ++ ;

 }
 echo "<br/>";
 echo "A soma de todos numeros é: $soma . <br/>";
 