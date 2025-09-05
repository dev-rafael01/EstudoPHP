<?php
/**
 * filesystem
 * f(algumacoisa) - file (arquivo)
 * read (ler) - r
 * resource = recurso 
 */

$arquivo = fopen('nomes.txt', "r");

if($arquivo){
    echo 'Arquivo aberto com sucesso';
    fclose($arquivo);
}else{
    echo 'Arquivo nao encontrado ou nao pode ser aberto';
}
print_r($arquivo);






?>