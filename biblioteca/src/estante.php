<?php
namespace Rafael\Biblioteca;
// use Rafael\Biblioteca\Livro;

class Estante
{
     //array privado de livros
     private array $livros = [];

     public function adicionarLivro(Livro $livro): void
     {
        $this->livros[] = $livro;
     }

     public function removerLivro(Livro $livro): void
     {
        $this->livros = array_filter($this->livros,
        function ($livroAtual) use ($livro)
        {
          echo 'Livro Atual: ' . $livroAtual->getTitulo();
          if($livroAtual === $livro)
          {
            echo ' - Livro Removido! ';
          }
           echo '<br/>';
          return $livroAtual !== $livro;  
        }
        );
     }

     public function verificarLivro(Livro $livro): bool
     {
        return in_array($livro, $this->livros);
     }

    public function buscarLivroPorTitulo(string $titulo): ?Livro
    {
        foreach($this->livros as $livro)
        {
         if(str_contains(strtolower($livro->getTitulo()), strtolower($titulo))){
            return $livro;
         }
        }
        return null;
    }

    public function listarLivrosDisponiveis()
    {

      //Forma longa, mas com o mesmo objetivo

      $livrosDisponveis = [];

      foreach($this->livros as $livroAtual)
      {
          if($livroAtual->estaDisponivel())
          {
            $livrosDisponveis[] = $livroAtual;
          }
      }
         return $livrosDisponveis;


      //Forma simplificada (abaixo)
      
      //  return array_filter($this->livros,
      //  function($livroAtual)
      //  {
      //    return $livroAtual->estaDisponivel();
      //  });
    }
}


?>