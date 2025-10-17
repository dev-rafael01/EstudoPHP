<?php

require_once 'connection.php';

$slq = 'SELECT * FROM tabelaQueNaoExiste';

$smtm = $pdo->prepare($sql);

try{    
    $smtm->execute();
}catch (PDOException $e){
    echo 'ERRO DE CONEXAO' . $e->getMessage();
    
}


// PDO:: ERROMODE_SILENT (SILENCIOSO)
// PDO:: ERROMODE_WARNING (ALERTA)
// PDO:: ERROMODE_EXCEPTION (LANÇA EXCEÇÕES)


?>