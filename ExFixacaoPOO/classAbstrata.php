<?php
 
abstract class animal
{
    abstract public function emitirSom();
}

class Cachorro extends animal
{
    public $nome = 'Cachorro';

    public function emitirSom(){
        return 'AU AU';
    }
}

class Gato extends animal
{
        public $nome = 'Gato';
        public function emitirSom(){

            return 'Miau';
        }
}


$gato = new Gato();
$gato->emitirSom();
echo '<hr/>';

$cahorro = new Cachorro();
$cachorro->emitirSom();


?>