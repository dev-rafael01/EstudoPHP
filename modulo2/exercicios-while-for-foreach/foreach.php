<?php

/**
 * 5. Foreach – Lista de frutas
 * Crie um array simples com 5 nomes de frutas e use um foreach para imprimir cada uma delas.
 * 
 *  6. Foreach – Produtos com nome e preço
 * 
 *  Crie um array associativo (ou um array de arrays) com nome e preço de 4 produtos. Use um foreach para imprimir cada produto no formato
 * 
 * 
 * https://chatgpt.com/share/6895b7d7-57e8-8003-8edd-e09d63362b11
 */

$frutas = ['maça' , 'pera' , 'uva', 'banana', 'laranja' ];

foreach($frutas as $frutas){
    echo  "[" . $frutas . ']' ;
}

echo "<br/>";
echo "==========================================";
echo "</br/>";

$produtos = ['televisao' => 100 , 'telefone' => 250 , 'panela' => 50 , 'Computador' => 500];

foreach($produtos as $produto => $valor){

    echo" Nome: $produto    Preço: $valor" . "<br/>";

    $subTotal = $valor += $valor;

}

echo "Valor Total dos Produtos ". $subTotal;