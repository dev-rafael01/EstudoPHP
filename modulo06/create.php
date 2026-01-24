<?php
require_once 'connection.php';


$slq =  'INSERT INTO usuarios (username, name, password) VALUES (:username, :name, :password)';

$stmt = $pdo->prepare($slq);

$_username = 'Lethicia';
$_name = 'Lethicia Jesus';
$_password = '1234567';

$stmt->bindParam(':username', $_username );
$stmt->bindParam(':name', $_name);
$stmt->bindParam(':password', $_password);

if ($stmt->execute()){
    echo ' Usuario inserido com sucesso.';
}else{
    echo 'Nenhum dado foi inserido no banco';
}



