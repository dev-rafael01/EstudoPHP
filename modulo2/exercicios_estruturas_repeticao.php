<?php

/**
 * exercicios While
 * 
 * 1. Crie um script para escrever a tabuada do 5  com while
 * 
 */

$valor = 5;
$contador = 0;
while($contador <= 10){
    echo $valor .'x'. $contador . ' = ';
    echo $resultado = $valor * $contador .'<br>';
    
    $contador ++;
}
echo "=======================================================". '<br>' ;

//* 2. crie um script para escrever a soma de todos numeros de 1 a 20 com while

$numero = 1;
$soma = 0;

while($numero <= 20){
    $soma = $soma + $numero;
    $numero ++;
}
echo "A soma é: $soma" . "<br/>"; 

echo "=======================================================". '<br>' ;

/**
 * exercicio de For
 * 
 */
//1. crie um scrip que escreve todos numeros de 1 a 10 com FOR
 
$numero3 = 0;

for($numero3; $numero3 <= 10 ; $numero3 ++){
    echo "Numero atual é: $numero3" ." <br/>";
    
}
echo "=======================================================". '<br>' ;

//2. Escreve um Script PHP que desenhe meio triangulo com asterisco (*). de 10 linhos exemplo.  [: *  : ** : ***:]
//

for($linhas = 1;$linhas <= 10; $linhas++ ){
    for($asteristicos =1 ;$asteristicos <= $linhas; $asteristicos++){
        echo "*";
    }
    echo "<br/>";
    
}
/**
 * Exercicio com FEREACH
 */

//1.Crie um array de numeros [1, 2, 3, 4, 5,] e use um loop foreach para somar todos os elementos do array e imprimir o resultado
echo "=======================================================". '<br>' ;

$array = [1, 2, 3, 4, 5];
$resultado = 0;
foreach($array as $numero){
     $resultado += $numero ;   
}
echo "A soma é $resultado". "<br/>";


//2. crie um array associativo de produtops com nome e preço (por exemplo, [produto1 => 10, produto2 => 20, produto3 => 30]) e use um loop foreach para impirir o nome e preço de cada produto. 
echo "=======================================================". '<br>' ;

$carrinho = ['produto 1' => 10, 'produto 2' => 20, 'produto 3' => 30];
$subtotal = 0;


foreach($carrinho as $nome => $valor){


    if($nome === 'produto 1'){
        $valor = $valor * 1;
        echo "Nome: $nome, Preço: $valor <br />";
    }
    if($nome === 'produto 2'){
         $valor = $valor * 2;
        echo "Nome: $nome, Preço: $valor <br />";
    }
    if($nome === 'produto 3'){
         $valor = $valor  * 3;
         echo "Nome: $nome, Preço: $valor <br />";
    }

     $subtotal += $valor;
}

echo "SubTotal é $subtotal";







// foreach($carrinho as $nome => $valor){
//     echo "Nome: $nome, Preço: $valor <br /> ";
//     $subtotal += $valor;
// }
// echo "SubTotal é $subtotal";






