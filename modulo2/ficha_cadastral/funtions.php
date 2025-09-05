<?php

/**
 * calcula o salario anual baseada no salario mensal
 * 
 * @param float $salarioMensal salario mensal
 * 
 * @return float salario anual
 */


//calculo do salario anual
function calculoSalarioAnual(float $salarioMensal): string{

    // 13 DECIMO TERCEIRO SALARIO, 1/33 DE FERIAS
    $tecoDeFerias = $salarioMensal / 3;
    $salario_anual = ($salarioMensal * 13) + $tecoDeFerias;

    return convertNumberToBRL($salario_anual);
    
}


//quantos anos faltam para se aposentar

/**
 * Calcula a quantidade de anos que falta para alguem se aposentar
 * 
 * @param int $idade idade da pessoa
 * 
 * @param string $sexo sexo da pessoal
 * 
 * @return int Quantidade de anos que falta para se aposentar
 */

function calcularFaltanteParaAposentadoria(int $idade, string $sexo){
    $anos_nescesarios_para_aposentar = $sexo == "M" ?  IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;
     return $anos_nescesarios_para_aposentar - $idade;
}






/**
 * Recebe um valor numerico e retorna um valor monetario
 * 
 * @param float $number valor numerico
 * 
 * @return string valor monetario
 */

//transformar um numero em valor manoteria 

function convertNumberToBRL(float $number): string {

    return number_format($number, 2, ',', '.');
}

?>