<?php

namespace Rafael\Biblioteca;

abstract class Usuario
{
     protected $nome;
     protected array $livrosEmprestados = [];

     public function __construct(string $nome)
     {
        $this->nome = $nome;
        
     }

     abstract public  function podePegarEmprestado(): bool;
   
     
     public function adicionarLivroEmprestado(Livro $livro): void
     {
       if($this->podePegarEmprestado()){
         $this->livrosEmprestados[] = $livro;
       }else{
            throw new \Exception('O usuario nao tem permissão para pegar livros emprestados..');
       }
     }

     public function removerLivroEmprestado(livro $livro): void 
     {
        $this->livrosEmprestados = array_filter($this->livrosEmprestados,
        function($livroAtual) use ($livro){
            return $livroAtual !== $livro;
        }
        );
     }

     public function listarLivrosEmprestados(): array 
     {
        return $this->livrosEmprestados;
     }
}



?>