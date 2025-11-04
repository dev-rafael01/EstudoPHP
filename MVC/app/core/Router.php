<?php

 require_once ('../app/controllers/HomeController.php');
 require_once ('../app/controllers/NoticiasController.php');
 require_once ('../app/controllers/errors//HttpErroController.php');

class Router
{

    public function dispatch($url)
    {
        $url = trim($url, '/');
        $partes = $url ? explode('/', $url) : [];

        $controllerName =  $partes[0] ?? 'Home';
        $controllerName = ucfirst($controllerName) . 'Controller';
        $acitionName = $partes[1] ?? 'index';

        if(!class_exists($controllerName)){
          //exibir 404..
          $controller = new HttpErroController();
          $controller->NotFound();
          return;
        }
         $controller = new $controllerName(); 
       
        if (!method_exists($controller, $acitionName)){
          $controller = new HttpErroController();
          $controller->NotFound();
          return;
      }

        $params = array_slice($partes, 2);
      
        call_user_func_array([$controller, $acitionName], $params);


    }

}



?>