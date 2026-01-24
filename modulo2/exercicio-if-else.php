<?php

//Aqui temos if e else de forma padrao

$temperatura = 25;

if($temperatura > 25){
    echo "Esta quente";
}elseif($temperatura  >= 15 && $temperatura <= 25){
    echo "Esta Agradavel";
}else{
    echo "Esta Frio";
}
echo "<br/>";
echo "==================================";

echo "<br/>";

$media = 6;

if($media >= 7){
    echo "APROVADO";
}elseif($media >= 5 && $media <= 6){
    echo "RECUPERAÇÃO";
}else{
    echo "REPROVADO";
}

echo "<br/>";
echo "==================================";
echo "<br/>";

// aqui temos if e else de forma ternaria
$nota1 = 4;
$nota2 = 10;
$media = ($nota1 + $nota2) /2;


echo ($media >= 7)? "APROVADO" : (($media >= 5)? "RECUPERAÇÃO" : "REPROVADO");

echo "<br/>";
echo "==================================";
echo "<br/>";

$zero = 10;

echo ($zero >=1)? "POSITIVO" : (($zero < 0)? "NEGATIVO" : "ZERO");

echo "<br/>";
echo "==================================";
echo "<br/>";


$permisao = "rafael";

echo($permisao === "admin")? "ACESSO TOTAL" : (($permisao === "editor") ? "ACESSO LIMITADO" : "ACESSO NEGADO");

echo "<br/>";
echo "==================================";
echo "<br/>";

$idade = 61;

if($idade < 12){
    echo "CRIANÇA";
}elseif($idade >= 12 && $idade <= 18){
    echo "ADOLESCENTE";
}elseif($idade >= 19 && $idade <= 60){
    ECHO "ADULTO";
}else{
    echo "IDOSO";
}

echo "<br/>";
echo "==================================";
echo "<br/>";

$valor = 110;
$frete = 10;
$frete1 = 20;

if($valor > 100){
    echo "O VALOR DA COMPRA E: $valor <br/> VOCE GANHOU FRETE GRATIS";
}elseif($valor >= 50 && $valor < 100 ){
    echo "VALOR DA COMPRA $valor <br/>";
    echo "VALOR FRETE $frete <br/>";
    echo "O VALOR TOTAL (COMPRA + FRETE) É: ". ($valor + $frete) ." Reais";
}else{
    echo "VALOR DA COMPRA $valor <br/>";
    echo "VALOR FRETE $frete1 <br/>";
   echo "O VALOR TOTAL (COMPRA + FRENTE) É: ". ($valor + $frete1). " Reias";
}

echo "<br/>";
echo "==================================";
echo "<br/>";


$peso = 59;
$altura = 1.70;

$imc = $peso / ($altura * $altura);

if($imc < 18.5){
   echo "Seu IMC é" . round($imc, 2) . "ABAIXO DO PESO";
}elseif($imc >= 18.5 && $imc < 25){
   echo "Seu IMC é" . round($imc, 2) . "PESO NORMAL";
}elseif($imc >= 25 && $imc < 30){
    echo "Seu IMC é" . round($imc, 2) . "SOBREPESO";
}else{
    echo "Seu IMC é" . round($imc, 2) . "OBESIDADE";
}




