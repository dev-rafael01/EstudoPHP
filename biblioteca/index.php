<?php
require_once 'vendor/autoload.php';

use \Rafael\Biblioteca\Livro;
use \Rafael\Biblioteca\Estante;
use Rafael\Biblioteca\usuario;

echo 'Sistema de Bibliotca Iniciando <br/>';


$livro1 = new Livro('B7WEB','PHP 8 E OOP');
$livro2 = new Livro('B7WEB', 'Java pra Iniciantes');
$livro3 = new Livro('B7WEB', 'Python pra Iniciantes');
$livro1->marcaComoDisponivel();
$livro2->marcaComoDisponivel();

$estante = new Estante();
$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);
$estante->adicionarLivro($livro3);

$livroEncontrador = $estante->buscarLivroPorTitulo('php');

$professor = new Usuario('Professor Rafael', 'professor');
echo '<pre/>';
var_dump($professor)

?>