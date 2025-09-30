<?php
require_once 'vendor/autoload.php';

echo 'Sistema de Bibliotca Iniciando <br/>';

use Rafael\Biblioteca\Livro;

$livro = new Livro('Rafael Jesus', 'PHP 8 E OOP');
echo "<pre/>";

echo 'Livro' . $livro->getTitulo() . '<br/>';
echo 'Autor' . $livro->getAutor() . '<br/>';
echo 'Disponveil: ' . ($livro->estaDisponivel() ? 'sim' : 'não') . '<br/>';



?>