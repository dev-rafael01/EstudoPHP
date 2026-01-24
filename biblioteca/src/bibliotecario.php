<?php

namespace Rafael\Biblioteca;

class  Bibliotecario
{
    public static function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante): bool
    {
        
        if (!$livro->estaDisponivel()){
           throw new \Exception("O livro não esta disponviel.");
            return false;
            
        }

        if(!$usuario->podePegarEmprestado()){
            throw new \Exception("O usuário nao pode pegar livros emprestados.");
            return false;
        }

        if (!$estante->verificarLivro($livro)){
            throw new \Exception("O livro não está disponivel ");
             return false;
         }

        $livro->marcaComoEmpresatado();
        $usuario->adicionarLivroEmprestado($livro);
        $estante->removerLivro($livro);
        return true;
        
    }

    public static function devolverLivro(Usuario $usuario, Livro $livro, Estante $estante): bool
    {
         if ($livro->estaDisponivel()){
            throw new \Exception("O livro ja está disponivel.");
            return false;
         }

        if($estante->buscarLivroPorTitulo($livro->getTitulo())){
            throw new \Exception("O livro ja está disponivel");
            return false;
         
        }

         if(!in_array($livro, $usuario->listarLivrosEmprestados())){
             throw new \Exception("O livro não esta com o usuário.");
             return false; 
         }

            
         $usuario->removerLivroEmprestado($livro);
         $estante->adicionarLivro($livro);
         $livro->marcaComoDisponivel(); 
         return true;
    }
}




?>