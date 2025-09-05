<?php


$nomes = ['alessandra', 'bonieky', 'joao', 'maria' ];

$dados = ['nome' => 'alessandro', 'idade' => 33];

foreach($nomes as $nome){
    echo  "$nome <br >/";
}

foreach($dados as $chaves => $valor){
    echo "$chaves : $valor <br />";
}

