<?php

namespace Rafael\Biblioteca;

class Visitante extends Usuario
{
    private const MAX_LIVROS_EMPRESTADOS = 0;

    public function podePegarEmprestado(): bool
    {
        return false;
    }
}


?>