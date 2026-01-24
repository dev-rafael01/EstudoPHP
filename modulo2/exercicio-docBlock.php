<?php



/**
 * @param int $n1 n1 e um numero de entrada;
 * 
 * @param int $n2 e o segundo numero de entrada;
 * 
 * 
 * @return string  expressão da  multiplicação dos resultados
 */


function tabuada ($n1, $n2){

    return "$n1 * $n2 = ". ($n1 * $n2);

}

echo tabuada(5,2) . "<br/>";

echo "============================================ <br/>";

/**
 * 
 * @param int $area1 aqui e o primeiro numero da area
 * @param int $area2 aqui e o segundo numero da area
 * 
 * @return int Área total em metros quadrados.
 * 
 */

$area1 = 4;
$area2 = 5;

function calcularArea($area1 , $area2){
    return  $area1 * $area2;     
}

echo "Primeira medida: $area1 Metros <br/>";
echo "Segunda medida: $area2 Metros <br/>";
echo "Area Total: ". calcularArea($area1,$area2 ).' <br/>';

echo "============================================ <br/>";


/**
 * 
 * @param string $nome insenir o nome do usuario
 * 
 * @return strig Retorna o nome do usuario
 * 
 */
 
function contarVogais ($nome){

    return $nome;
}

echo contarVogais("Rafael");




