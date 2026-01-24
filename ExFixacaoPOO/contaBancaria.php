<?php

   class ContaBancaria
   {
         private float $saldo;
         // public float $deposito;
         // public float $sacar;
         // public $verSaldo;
         

         public function __construct(float $saldo)
         {
            $this->saldo = $saldo;
           
         }


         public function sacar(float $valor)
         {
            if($valor > $this->saldo)
            {
                echo 'VOCE NAO TEM SALDO SUFICIENTE <br/> ';
                return;
            }
            
            if($valor > $this->saldo - 100 === true){
               echo 'Voce não pode sacar mais doque do valor do Saldo ';
               return;
            }

            echo 'VOCE SACOU ' . number_format($valor, 2, ',' , '.') . '<br/>';
            $this->saldo -= $valor;
         }

         public function deposito(float $valor)
         {
            if($valor > 100 || $valor <=0){
               echo 'O DEPÓSITO DEVE SER SUPERIOR 0,01 A 100,00 <br/>';             
            }else{
               echo 'VOCE DEPOSITO: ' .  number_format($valor, 2, ',' , '.') . '<br/>';
               $this->saldo += $valor;
            }   
            
         }

         public function verSaldo()
         {
            return 'R$ ' . number_format($this->saldo, 2, ',', '.');
         }
   } 

   $conta = new ContaBancaria(500);
   echo 'SALDO INICIAL: ' . $conta->verSaldo() . '<br/>';
   $conta->sacar(100);
   $conta->deposito(102);
   echo 'SALDO ATUAL: ' . $conta->verSaldo() . '<br/>';





?>