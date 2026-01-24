<?php

 abstract class FormaGeometrica {

  abstract public function calcularArea();
}

   class Quadrado extends FormaGeometrica{

    public $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }
    
    public function calcularArea(){
      return $this->lado * $this->lado;
    }

}

  class Retangulo extends FormaGeometrica
{
       public $base;
       public $altura;

       public function __construct($base, $altura)
       {
         $this->base = $base;
         $this->altura = $altura;

       }

       public function calcularArea()
       {
        return $this->base  *  $this->altura;
       }

}

class Triangulo extends FormaGeometrica
{
  public $base;
  public $altura;

  public function __construct($base, $altura)
  {
    $this->base = $base;
    $this->altura = $altura;

  }

  public function calcularArea()
  {
     return $this->base * $this->altura / 2;
  }

}

$quadrado = new Quadrado(10);
echo 'A area do quadrado e: ' . $quadrado->calcularArea() . '<br/>';


$retangulo = new Retangulo(10, 2);
echo 'A area do Retangulo e: ' . $retangulo->calcularArea() . '<br/>';

$triangulo = new Triangulo(10, 2);
echo 'A area do Triangulo e: ' . $triangulo->calcularArea() . '<br/>';





?>