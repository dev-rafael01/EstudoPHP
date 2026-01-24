<?php

class Conta{


//atributos

private int $saldo;
private bool $chequeEspecial;

 public function __construct( int $saldo, bool $chequeEspecial = false)
 {
    $this->saldo = $saldo;
    $this->chequeEspecial = $chequeEspecial;
 }

 public function sacar(int $valor1){

   
    
    if($valor1 > $this->saldo  && $this->chequeEspecial == false){

        echo 'Voce nao tem saldo Suficiente <br/>';
        return;
    }

    if($valor1 > $this->saldo +100  && $this->chequeEspecial == true){

      echo "Voce  nao pode sacar mais doque o valor do saldo + cheque especial (100,00) <br/>";
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

 public function verSaldo(){
   
   return $this->saldo;
 }

}

$conta1 = new Conta(500);
echo 'Saldo inicial ' . $conta1->verSaldo() . "<br/>";
$conta1->deposito(110);
$conta1->sacar(650);
 echo 'Saldo Atual ' . $conta1->verSaldo() . "<br/>";

 echo "<hr/>";

$conta2 = new Conta(500, true);
echo 'Saldo inicial ' . $conta2->verSaldo() . "<br/>"; 
$conta2->deposito(111);             
$conta2->sacar(600);
echo 'Saldo atual ' . $conta2->verSaldo() . "<br/>"



?>