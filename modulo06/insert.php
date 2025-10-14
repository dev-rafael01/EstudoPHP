<?php
require_once 'connection.php';


$slq =  'INSERT INTO usuarios (username, name, password) VALUES (:username, :name, :password)';

$stmt = $pdo->prepare($slq);

$_username = 'RafaelSantos1234';
$_name = 'Rafael Jesus1234';
$_password = '1234567';

$stmt->bindParam(':username', $_username);
$stmt->bindParam(':name', $_name);
$stmt->bindParam(':password', $_password);

$stmt->execute();



