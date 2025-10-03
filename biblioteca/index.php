<?php
require_once 'vendor/autoload.php';

use \Rafael\Biblioteca\Livro;
use \Rafael\Biblioteca\Estante;
use Rafael\Biblioteca\Aluno;
use Rafael\Biblioteca\Professor;
use Rafael\Biblioteca\Visitante;

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

// $aluno = new Aluno('Rafael');
// $aluno->adicionarLivroEmprestado($livro1);
// $professor = new Professor('Santos');
// $professor->adicionarLivroEmprestado($livro1);
// $professor->adicionarLivroEmprestado($livro2);

$visitante = new Visitante('Adriano');
$visitante->adicionarLivroEmprestado($livro1);

echo '<pre/>';
// var_dump($visitante->listarLivrosEmprestados());
// var_dump($aluno->listarLivrosEmprestados());
// echo '<pre/>';
// var_dump($professor->podePegarEmprestado());
// var_dump($professor->listarLivrosEmprestados());

?>