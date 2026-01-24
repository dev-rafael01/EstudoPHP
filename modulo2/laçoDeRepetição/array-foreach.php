<?php


$pessoas = [
    ['nome' => 'rafael', 'idade' => 28, 'altura' => 1.80],
    ['nome' => 'Adriano', 'idade' => 24, 'altura' => 1.90],
    ['nome' => 'Victor', 'idade' => 12, 'altura' => 1.50]

];  


foreach($pessoas as $pessoa){
    echo 'nome: ' . $pessoa['nome'] ."<br/>";
    echo 'idade: ' . $pessoa['idade'] . '<br>';
    echo 'altura: ' . $pessoa['altura'] . '<br>';
}
