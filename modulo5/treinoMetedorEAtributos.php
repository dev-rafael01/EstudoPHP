<?php

 class Computador {

    // Atributos

    public string $nome;
    public int  $ano;
    public float $valor;

    //Metodos


    public function ligando(){

        echo 'Computador esta ligando...';
    }

    public function desligando(){
        
        echo 'Computador esta desligando..';
    }



 }

 $desktop = new Computador;

 $desktop->nome = 'PC GAMER';
 $desktop->ano = 2022;
 $desktop->valor = 1820.00;

 //$desktop->ligando();



 echo 'Computador';
 echo '<br/>'  ;
 $desktop->ligando();


 $notebook = new Computador;
 $notebook->nome = 'NOTEBOOK';
 $notebook->ano = 2025;
 $notebook->valor = 1520.00;

 echo 'Notebook';
 echo '<br/>'  ;
 $notebook->desligando();




?>