<?php

class Carro {

    // atributos

    public string $cor;
    public int $ano;
    public string $modelo;

    
}

$carro1 = new Carro;
$carro1->cor = 'azul';
$carro1->ano = 2025;
$carro1->modelo = 'Fiat';

print_r($carro1);

echo  '<br/>';

$carro2 = new Carro;
$carro2->cor = 'preto';
$carro2->ano = 2024;
$carro2->modelo = 'Corolla';

print_r($carro2);





?>