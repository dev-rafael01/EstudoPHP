<?php

class Produto {


    public string $nome;
    private float $preco;

    public function __construct(string $nome, float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    //Getter

    public function getPreco(){

        return $this->preco;
    }

    public function getNome(){
        return $this->nome;
    }

    //SETTER

    public function setPreco(float $preco){

       //Set = escrita
       $this->preco = $preco; 
    }

    public function setNome(string $nome){

        $this->nome = $nome;
    }


}

$produto1 = new Produto('cadeira', 500.00);
var_dump($produto1->getPreco()); 

$nome1 = new Produto('Rafael Santos', 12);

var_dump($nome1->getNome());



?>