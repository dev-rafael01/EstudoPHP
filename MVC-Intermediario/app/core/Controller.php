<?php

namespace app\Core;

class Controller {
    protected function views($view, $viewDate = [])

    {
        // Converte os índices do array $viewDate em variáveis
        // para serem usadas diretamente dentro da view
        extract($viewDate);

        $viewFile = __DIR__ . '/../views/' . $view . '.php';


        //Verifica se o arquivo da view realmente existe.
        if(!file_exists($viewFile))
            {
                //Se a view não existir | dispara uma Exception  evita erro silencioso |facilita debug  |  Isso é coisa de projeto organizado, ponto positivo:
                throw new \Exception("View file not Found(Arquivo não encontrado) "  . $viewFile );
                
            }
        require_once $viewFile;
    }
}

?>  