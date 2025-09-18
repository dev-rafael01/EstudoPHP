<?php

  class Pessoa
  {
        public string $nome;
        public int $idade;

        public function apresentar()
        {
            echo "Ola, meu nome é {$this->nome} E tenho {$this->idade} anos";
        }
  }

$dados = new Pessoa;
$dados->nome = 'Rafael';
$dados->idade = 28;

$dados->apresentar();


?>