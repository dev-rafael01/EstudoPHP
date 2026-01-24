<?php



// function somar(float $num1, float $num2, float $num3 = 0): float {
//     return $num1 + $num2 + $num3;
// }
// echo "Resultado da soma é:". somar ( 1, 2, 3);
// echo "<br/>";

// function verificarIdade( int $anoNascimento): int{
//     $anoAtual = date("Y");
//     $idade = $anoAtual - $anoNascimento;
//     return $idade;
// }
// echo "Sua idade atual é ". verificarIdade(1994);
// echo "<br/>";


// function portaoBalada( int $anoNascimento,  bool $acompanhado = false): string {
//     $idadeEntraBalada = 18;
//     $idade = verificarIdade($anoNascimento);

//     if($idade >= $idadeEntraBalada){
//         return "Pode entra na balada";
//     }elseif($idade < $idadeEntraBalada && $acompanhado){
//         return "Pode entra na balada com seu acompanhante";
//     }else{
//         return "Voce não pode entra na balada";
//     }

// }

// echo "pessoas de 1994 sem acompanhante " . portaoBalada(1994). "<br/>";
// echo "pessoas de 2015 com acompanhante " . portaoBalada(2015, true). "<br/>";
// echo "pessoas de 2014 sem acompanhante " . portaoBalada(2014). "<br/>"

/**
 * Geral uma string de Saudação
 * 
 * @param string $nome da pessoa
 * @param string $sobreNome da pessoa
 * @param string $idade seria a idade da pessoa
 * 
 * @return string Saudação
 * 
 */



function parametrosNomeados( string $nome, string $sobrenome, int $idade): string{
    return "Ola, $nome $sobrenome. Voce tem $idade anos.";
}
echo parametrosNomeados(nome: "Rafael", sobrenome: "Santos", idade: 28)
?>