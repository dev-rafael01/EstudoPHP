<?php

require_once 'connection.php';

//pdo

$id =  1;
$novoNome = 'Novo nome de testes';
$novoUsername = 'novo-username';

$sql = 'UPDATE usuarios SET name = :name, username = :username WHERE id = :id ';

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $novoNome);
$stmt->bindParam(':username', $novoUsername);
$stmt->bindParam(':id', $id);
$queryExecute = $stmt->execute();

// var_dump($queryExecute);

if($queryExecute){
    echo 'Usuario atualizado com sucesso';
}else{
    echo 'Erro ao atualizar';
}

?>

