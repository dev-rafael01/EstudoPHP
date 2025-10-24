<?php

class Controller
{
 protected function view($view)
 {
    $viewFile = __DIR__ . '/../views/' . $view . '.php';
   
    if(!file_exists($viewFile)){
        throw new Exception("Falha ao carregar a view") . $viewFile;
    }
     require_once $viewFile;

 }

}

?>