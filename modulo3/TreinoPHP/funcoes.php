<?php

$sucesso = null;
$erro = null;
$mensagem = '';

function validarMensagem($mensagem){
    $mensagem = trim($mensagem);

    if(empty($mensagem)){
        return 'PREENCHA O FORMULARIO' ;
    }
    if(strlen($mensagem) < 5){
        return 'TEXTO PRECISA TER MAIS QUE 5 CARACTERES';
    }

    return true;
}



?>