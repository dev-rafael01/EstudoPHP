<?php

require_once 'connection.php';

//pdo

$id = '1 Drop table usuarios == ';

// $sql = 'SELECT * FROM usuarios WHERE id = :id';
$sql = 'SELECT * FROM usuarios';
$stmt = $pdo->prepare($sql);
// $stmt->bindParam(':id', $id);
$result = $stmt->execute();

// var_dump($result);


// array objeto 
if($result){
    $data = $stmt->fetchall(PDO::FETCH_OBJ);
    echo '<h3> Registros encontrados: ' . $stmt->rowCount() . '<h3>';

    foreach($data as $linha){
        echo '<p> '. $linha->username . '<p>';
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



