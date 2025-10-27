<?php

class Controller
{
 protected function view($view , $viewData = [])
 {
     /* A função extract() no PHP pega as chaves de um array associativo e transforma em variáveis com esses nomes.
    💡 Ou seja:
    extract() “tira” os valores do array e cria variáveis 
    automaticamente com o nome das chaves.
    */

    extract($viewData);
    $viewFile = __DIR__ . '/../views/' . $view . '.php';
   
    if(!file_exists($viewFile)){
        throw new Exception("Falha ao carregar a view") . $viewFile;
    }
     require_once $viewFile;

 }

}

?>