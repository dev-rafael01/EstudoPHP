<?php


 class Calculadora{

    // Definir uma constante para o PI
    private const PI = 3.14;
    public const VERSION = '1.0.0';


    // Metodos Estaticos 
    public static function areaCirculo(float $raio){

        return self::PI * $raio * $raio;
    }
 }


 $area = Calculadora::areaCirculo(5);
 echo Calculadora::VERSION;




?>