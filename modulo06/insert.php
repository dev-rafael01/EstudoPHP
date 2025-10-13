<?php
require_once 'connection.php';


$slq =  'INSERT INTO usuario (username, name, password) VALUES (:username, :name, :password)';

$stmt = $pdo->prepare($slq);

$_name = 'rafael Jesus';
$_username = 'rafaeljesus';
$_password = '123456';

$stmt->bindParam(':username', $_username);
$stmt->bindParam(':name', $_name);
$stmt->bindParam(':password', $_password);

$stmt->execute();
