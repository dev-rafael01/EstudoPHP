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
       
      if (!method_exists($controller, $acitionName)){
        $controllerName = 'NotFoundController';
        $controller = new $controllerName();
        $acitionName = 'index';
        // $controller->$acitionName();
        // exit;
      }

      $params = array_slice($partes, 2);
      
    //$controller->$acitionName();

    call_user_func_array([$controller, $acitionName], $params);


    }

}



?>