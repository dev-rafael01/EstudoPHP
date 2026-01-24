<?php

class Veiculo{

    public $marca;
    public $modelo;


    public function mover(){

        echo ' Andando muito rapido... <br/>';
    }

    public function frear(){

        echo ' Freando o veiculo.. <br/>';
    }

}

class Carro extends Veiculo{

    public $qntPortas;

    function __construct($marca, $modelo, $qntPortas)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->qntPortas = $qntPortas;
    }

    public function exibir(){

        return "Marca: {$this->marca} |
        Modelo: {$this->modelo} |
        Quantidade de Portas {$this->qntPortas} <br/>";

    }


    public function abrirPortas(){

        echo 'Abrindo as 4 portas <br/>';
       
    }
}

class Moto extends Veiculo{


  public $marca;
  public $modelo;
  public $empinar;


  function __construct($marca, $modelo, $empinar)
  {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->empinar = $empinar;
  }

  public function exibir(){

        return "Marca: {$this->marca} |
        Modelo: {$this->modelo} |
         Modelo do Guidon: {$this->empinar} <br/>";

    }


   public function empinar(){

    echo 'Empinando a moto... <br/>';
   }



}

echo 'Carro <br/>';
$carro = new Carro('Celta', 'Chevrolet', 4);
echo $carro->exibir();
$carro->mover();
$carro->frear();
$carro->abrirPortas();
$carro->mover();
echo '<hr/>';

echo 'Moto <br/>';
$moto = new Moto('Faizer 250', 'Honda', 'Esportivo');
echo $moto->exibir();
$moto->mover();
$moto->frear();
$moto->empinar();
$moto->mover();



?>