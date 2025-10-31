<?php

 require_once ('../app/controllers/HomeController.php');
 require_once ('../app/controllers/NoticiasController.php');
 require_once ('../app/controllers/NotFoundController.php');

class Router
{

    public function dispatch($url)
    {
        $url = trim($url, '/');
        $partes = $url ? explode('/', $url) : [];

        $controllerName =  $partes[0] ?? 'Home';
        $controllerName = ucfirst($controllerName) . 'Controller';

        if(!class_exists($controllerName)){
            $controllerName = 'NotFoundController';
        }

        $controller = new $controllerName();

        $acitionName = $partes[1] ?? 'index';
       
        if(method_exists($controller, $acitionName)){
            $controller->$acitionName();
        }else{
            http_response_code(404);
            echo 'ERRO 404- PAGINA NÃO ENCONTRADA';
        }


    }

}



?>