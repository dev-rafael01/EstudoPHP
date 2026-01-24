<?php

  class Veiculo
  {
        private $marca;
        private $modelo;

      public function __construct($marca, $modelo)
      {
        $this->marca = $marca;
        $this->modelo = $modelo;
      }

      public function getMarca()
      {
        return $this->marca;
      }

      public function getModelo()
      {
        return $this->modelo;
      }

  }

  class Carro extends Veiculo
  {
    public function acelerar()
    {
        echo "O CARRO:{$this->getMarca()} <br/>
        MODELO:{$this->getModelo()} <br/>
        ESTA ACELERANDO <br/> ";
    }
  }

  class Moto extends Veiculo
  {
    public function acelerar()
    {
        echo "A MOTO:{$this->getMarca()} <br/>
        MODELO:{$this->getModelo()} <br/>
        ESTA ACELERANDO <br/> ";
    }

  }
$carro = new Carro('FIAT', 'PALIO');
$carro->acelerar();
echo '<hr/>';
$moto = new Moto('HONDA ', 'TITAN 160');
$moto->acelerar();


?>