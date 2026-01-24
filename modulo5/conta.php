<?php

class Conta{


//atributos

 public int $saldo;

 public function __construct( int $saldo)
 {
    $this->saldo = $saldo;
 }

 public function sacar(int $valor1){
    
    if($valor1 > $this->saldo){

        echo 'Voce nao tem saldo Suficiente <br/>';
        return;
    }

    echo 'Voce sacou ' . $valor1 . "<br/>";
    $this->saldo -= $valor1;
 }

 public function deposito(int $valor){

    if($valor > 100){
        echo 'O deposito nao pode ser superior a 100,00 <br/>';
         return;
    }

    echo 'Voce depositou ' . $valor . "<br/>";
    $this->saldo += $valor;
 }

}

$conta1 = new Conta(500);
echo 'Saldo inicial ' . $conta1->saldo . "<br/>";
$conta1->deposito(110);
echo 'Saldo Atual ' . $conta1->saldo . "<br/>";
 $conta1->sacar(650);
 echo 'Saldo Atual ' . $conta1->saldo . "<br/>";



?>