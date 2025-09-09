<?php

class Carro {

    // atributos = seria oque o carro tem

    public string $cor;
    public int $ano;
    public string $modelo;


    // Metodo Magico

    public function __construct(string $cor, int $ano, string $metodo)
    {
      echo 'construindo Carro... <br>';
      $this->cor = $cor;
      $this->ano = $ano;
      $this->modelo = $metodo;
    }

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

$carro1 = new Carro('Azul', 2022, 'Gol');
var_dump($carro1);











?>