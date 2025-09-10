<?php

class Animal {
    public $nome;
    public $idade;
    public $raca;

    public function __construct($nome, $idade, $raca) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
    }

    public function respirando() {
        echo '<br/>Ela está respirando...<br/>';
    }

    public function mover() {
        echo 'Ela está se movendo...<br/>';
    }
}

class Mamifero extends Animal {
    public function amamentar() {
        echo 'Amamentando o filhote...<br/>';
    }
}

class Cachorro extends Mamifero {
    public function exibir() {
        return "Nome: {$this->nome} | Idade: {$this->idade} | Raça: {$this->raca}";
    }

    public function abanarRabo() {
        echo 'Abanando o rabo...<br/>';
    }

    public function latir() {
        echo 'Está latindo...<br/>';
    }
}

$cachorro = new Cachorro("Maya", "3 anos", "Golden");
echo $cachorro->exibir();
$cachorro->respirando();
$cachorro->mover();
$cachorro->amamentar();
$cachorro->abanarRabo();
$cachorro->latir();
