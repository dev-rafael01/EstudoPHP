<?php

require_once 'connection.php';

//pdo

$id = 4;

$sql = 'DELETE  FROM usuarios WHERE id = :id'; 
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id' , $id);
$stmt->execute();


if($stmt->rowCount() > 0){
    echo 'Usuario excluido com sucesso';
}else{
    echo 'Nenhum usuario excluido';
}



?>