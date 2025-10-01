<?php
require_once 'vendor/autoload.php';

use \Rafael\Biblioteca\Livro;
use \Rafael\Biblioteca\Estante;

echo 'Sistema de Bibliotca Iniciando <br/>';


$livro = new Livro('B7WEB','PHP 8 E OOP');
$livro2 = new Livro('B7WEB', 'Java pra Iniciantes');
$livro3 = new Livro('B7WEB', 'Python pra Iniciantes');

$estante = new Estante();
$estante->adicionarLivro($livro);
$estante->adicionarLivro($livro2);
 $estante->adicionarLivro($livro3);
echo '<pre/>';
print_r($estante);
echo '<hr/>';
$estante->removerLivro($livro);

print_r($estante);
?>