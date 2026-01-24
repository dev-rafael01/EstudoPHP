<?php

  class Pessoa1
  {
         public string $nome;
         public int $idade;

        public function __construct(string $nome, int $idade)
        {
            $this->nome = $nome;
            $this->idade =$idade;
        }

        public function apresentar()
        {
           echo "Ola, meu nome é {$this->nome} e tenho {$this->idade} anos ." ;
        }
  }

  $dados = new Pessoa1('Rafael', 28);
  $dados->apresentar();



?>