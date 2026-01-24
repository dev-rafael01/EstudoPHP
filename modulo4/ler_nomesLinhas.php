<?php
/**
 * filesystem
 * f(algumacoisa) - file (arquivo)
 * read (ler) - r
 * resource = recurso 
 */

$arquivo = fopen('cidades.txt', "a");

fwrite($arquivo, 'São Paulo');





fclose($arquivo);

//$bytes = filesize('nomes.txt');
// echo $bytes;

// while(!feof($arquivo)){
//     $linha = fgets($arquivo);
//     echo $linha . "<br/>";
// }


// fwrite($arquivo, "\n");
// fwrite($arquivo, 'CRISTIANO RONALDO');



// $nome1 = fgets($arquivo);
// echo $nome1;
// echo "<br/>";
// $nome2 = fgets($arquivo);
// echo $nome2;
// echo "<br/>";
// $nome3 = fgets($arquivo);
// echo $nome3;
// echo "<br/>";
?>