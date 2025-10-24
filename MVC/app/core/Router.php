<?php

 require_once ('../app/controllers/HomeController.php');
 require_once ('../app/controllers/NoticiasController.php');

class Router
{

    public function dispatch($url)
    {
        $url = trim($url, '/');
        $partes = $url ? explode('/', $url) : [];

        $controllerName =  $partes[0] ?? 'Home';
        $controllerName = ucfirst($controllerName) . 'Controller';

        $controller = new $controllerName();
        $controller->index();


    }

}



?>