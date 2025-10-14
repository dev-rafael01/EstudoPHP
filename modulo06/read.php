<?php

require_once 'connection.php';

$slq = 'SELECT * FROM usuarios';
$stmt = $pdo->prepare($slq);
$result = $stmt->execute();

// var_dump($result);

if($result){
    $data = $stmt->fetchall(PDO::FETCH_OBJ);

    foreach($data as $linha){
        echo '<h1> '. $linha->username . '<h1>';
        echo '<pre>';
        var_dump($linha);
        echo '<pre>';
        echo '<hr>';
    }
}
