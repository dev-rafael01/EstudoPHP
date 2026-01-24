<?php

 abstract class Animal {

      abstract public function emitirSom();
     
}

class Cachorro extends Animal{
    public $nome = "Cachorro";

    public function emitirSom(){

        return 'AU AU';
    }
}

class FilaBrasileiro extends Cachorro{

    public $nome = 'Fila Brasileiro';
    public $meses = 6;
    public function emitirSom()
    {
        if($this->meses >= 6){
            return 'RUF RUF';
        }else{
           return parent::emitirSom();
        }
        
    }
}

class Gato extends Animal{

    public $nome = "GATO";
     public function emitirSom(){

        return 'Miau';
    }
}

class Peixe extends Animal {
    public $nome = "Peixe";

    public function emitirSom()
    {
        return null;
    }


    
}

function fazerOanimalEmiatirSol($animal){

echo 'O animal '. $animal->nome. ' faz: ' .$animal->emitirSom(). '<br/>';

}


$cachorro = new Cachorro('', '', "");
$gato = new Gato('', '', "");
$peixe = new Peixe('', '', "");


$animais = array($cachorro, $gato, $peixe);

foreach($animais as $animal){

    fazerOanimalEmiatirSol($animal);
}

$fila = new FilaBrasileiro("", "", "");
fazerOanimalEmiatirSol($fila);


?>