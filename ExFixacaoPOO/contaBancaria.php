<?php

   class ContaBancaria
   {
         private float $saldo;
         public float $deposito;
         public float $sacar;
         public $verSaldo;
         

         public function __construct(float $saldo , float $deposito , float $sacar, $verSaldo)
         {
            $this->saldo = $saldo;
            $this->deposito = $deposito;
            $this->sacar = $sacar;
            $this->verSaldo = $verSaldo;
         }


         public function sacar(int $valor2)
         {
            if($valor2 > $this->saldo)
            {
                echo 'Voce nao tem saldo suficiante ';
                return;
            }
         }





   } 





?>