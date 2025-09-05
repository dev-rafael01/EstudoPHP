<?php
$nome = "João Silva";
$idade = 25;
$sexo = "F";
$salario_mensal = 2210.30;
$salario_anual = null;
$emprego_atual = true;
$habilidades = ["PHP", "JavaScript", "HTML", "CSS"];
$situacao_emprego = null;

/*
 abaixo temos operador ternaceiro, funciona como if e else de forma bem mais simplicada
 if == ?  /  else == :
 (idade ==10) ? sim : não

 variavel = condição ? valor_atende_a_condição : valor_nao_atende_a_condição    
 */
$situacao_emprego = $emprego_atual ? 'Empregado' : 'Desempregado';

 /*
 if ($emprego_atual){
    $situacao_emprego = "Empregado";
     }else{
    $situacao_emprego = "Desempregado";
    }
 */

// $anos_nescesarios_para_aposentar = $sexo == "M" ?  IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;

//  if($sexo == "M"){
//        $anos_nescesarios_para_aposentar = IDADE_APOSENTADORIA_MASCULINA;
//  }else{
//       $anos_nescesarios_para_aposentar = IDADE_APOSENTADORIA_FEMININA;
//  }

?>