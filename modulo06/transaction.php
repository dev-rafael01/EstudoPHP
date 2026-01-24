<?php

require_once 'connection.php';

try{

$pdo->beginTransaction();

$usuario01 = 'Claudio silva';

$sql = 'INSERT INTO usuarios (name, username, password) VALUES (:name, :username, :password )';

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':name', $usuario01);
$stmt->bindParam(':username', $usuario01);
$stmt->bindParam(':password', $usuario01 );
$stmt->execute();
echo 'Usuario 1 cadastrado com sucesso!';

echo '<hr>';


$usuario02 = 'alessandra maria';
$sql2 = 'INSERT INTO usuarios (name, username, password) VALUES (:name, :username, :password )';

$stmt2 = $pdo->prepare($sql2);
$stmt2->bindParam(':name', $usuario02 );
$stmt2->bindParam(':username', $usuario02 );
$stmt2->bindParam(':password', $usuario02 );
$stmt2->execute();
echo 'Usuario 2 cadastrado com sucesso!';


$pdo->commit();

}catch (PDOException $e){
    echo 'ERRO NA TRANSAÇÃO'; 
    // $pdo->rollBack();
}




?>