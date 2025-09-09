<?php

class Carros {

    // atributos = seria oque o carro tem

    public string $cor;
    public int $ano;
    public string $modelo;

  // Metodos = seria oque o carro faz 


    public function acelerar()
    {
       echo 'Acelerando..';
    
    }
    
    public function freiar()
    {

      echo 'Freiando..';    
    }
}
$carro1 = new Carros;
$carro1->cor = 'azul';
$carro1->ano = 2025;
$carro1->modelo = 'Fiat';

$carro2 = new Carros;
$carro2->cor = 'preto';
$carro2->ano = 2024;
$carro2->modelo = 'Corolla';

echo "Carro 1" . $carro1->acelerar() . "<br/>";
echo "Carro 1" . $carro1->freiar()   . "<br/>";

echo "Carro 2" . $carro2->acelerar() . "<br/>";
echo "Carro 2" . $carro2->freiar()   . "<br/>";







?>