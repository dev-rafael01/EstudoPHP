<?php

 class Calculadora{
    public static function areaCirculo(float $raio){

        return 3.14 * $raio * $raio;
    }
 }


 $area = Calculadora::areaCirculo(5);
 echo $area;




?>