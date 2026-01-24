<?php
/**
 * filesystem
 * f(algumacoisa) - file (arquivo)
 * read (ler) - r
 * resource = recurso 
 */

$arquivo = fopen('nomes.txt', "r");


$nomes = fread($arquivo, 55);
echo  'Nomes ' . $nomes . "<br/>";




?>