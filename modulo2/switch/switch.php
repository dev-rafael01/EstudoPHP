<?php

/**
 * Retorna o texto representativo do dia da semana (de 1 seg a 7- dom)
 * 
 * @param int $dia dia da semana (1-7)
 * 
 * 
 * @return string dia da semana texto
 */


function diaDaSemanaSwitch(int $dia): string{


    switch ($dia) {
        case 1:
        return 'Segunda-feira';
        break;
        case 2:
        return 'Terça-feira';
        break;
        case 3:
        return 'Quarta-feira';
        break;
        case 4:
        return 'Quinta-feira';
        break;
        case 5:
        return 'Sexta-feira';
        break;
        case 6:
        return 'Sabado';
        break;
        case 7:
        return 'Domingo';
        break;
        default:
        return 'invalido';

    }
}

echo "dia da semana ".diaDaSemanaSwitch(8)



?>