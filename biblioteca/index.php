<?php
require_once 'vendor/autoload.php';

use \Rafael\Biblioteca\Livro;
use \Rafael\Biblioteca\Estante;
use Rafael\Biblioteca\Aluno;
use Rafael\Biblioteca\Professor;
// use Rafael\Biblioteca\Visitante;
use Rafael\Biblioteca\Bibliotecario;

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

$aluno = new Aluno('Rafael Santos');
$aluno2 = new Aluno('Adriano Santos');

// $bibliotecario = new Bibliotecario();

try{
    Bibliotecario::emprestarLivro($aluno, $livro1, $estante);
    echo 'Livro ' . $livro1->getTitulo() . ' Emprestado para '. $aluno->getNome() . '<br/>';
    Bibliotecario::devolverLivro($aluno2, $livro1, $estante);
}catch (\Exception $e){
    echo 'ERRO: '. $e->getMessage(). '<br/>';
}



echo '<pre/>';


?>