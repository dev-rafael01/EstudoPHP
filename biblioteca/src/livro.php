<?php

namespace Rafael\Biblioteca;

class Livro
{
    //Propriedades

    private string $autor;
    private string $titulo;
    private bool $disponivel = false;

    //Contrutor da class

    public function __construct( string $autor, string $titulo)
    {
        $this->autor = $autor;
        $this->titulo =$titulo;
        
        // $this->disponivel = $disponivel;
    }

    public function marcaComoEmpresatado()
    {
        $this->disponivel = false;
    }
    //Metodos de ação (Alteram o estado do Objeto)
    public function marcaComoDisponivel()
    {
        $this->disponivel = true;
    }
    //Metodos de Negocios
    public function estaDisponivel() : bool
    {
        return $this->disponivel;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }
}



?>