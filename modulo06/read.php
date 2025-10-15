<?php

require_once 'connection.php';

//pdo

$id = '1 Drop table usuarios == ';

$slq = 'SELECT * FROM usuarios WHERE id = :id';
$stmt = $pdo->prepare($slq);
$stmt->bindParam(':id', $id);
$result = $stmt->execute();

// var_dump($result);


// array objeto 
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

//array associativo
// if($result){
//     $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     foreach($data as $linha){
//     echo '<h1>' . $linha['username'] . '<h1>';
//     echo '<pre>';
//     var_dump($linha);
//     echo '<pre>';
//     echo '<hr>';
//     }
// }



