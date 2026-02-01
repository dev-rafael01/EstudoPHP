<?php
namespace App\Core;

use App\Controllers\HomeController;
Use App\Controllers\NoticiasController;
use App\Controllers\Errors\HttpErrorController;



class Router {
                    //expedição
    public function   dispatch    ($url)
    {
       // Remove as barras "/" do início e do fim da URL
        $url = trim($url, '/');
        // Se existir URL, divide ela em partes usando "/" como separador; senão, cria um array vazio
        $parts = $url ? explode('/', $url) : [];


        // Define o nome do controller com base na primeira parte da URL ou usa "Home" como padrão
        $controllerName = $parts[0] ?? 'Home';
        // Coloca a primeira letra do controller em maiúscula e adiciona o sufixo "Controller"

       

        $controllerName = 'App\Controllers\\' .  ucfirst($controllerName) . 'Controller';
        $actionName = $parts[1] ?? 'index';
        
    
         //pagina de erro do 404
         //Verifica se a classe (Controller) existe antes de usá-la.  
         // Evita erro fatal ao instanciar classes inexistentes.
        if(!class_exists($controllerName)){
            $controller =  new HttpErrorController;
            $controller->notFound();
            return;
        }
        // Aqui eu crio uma instância da classe HomeController
        $controller = new $controllerName();

        //Verifica se o método existe dentro do Controller.
        if(!method_exists($controller, $actionName)){
            $controller =  new HttpErrorController;
            $controller->notFound();
            return;
        }
        $params = array_slice($parts, 2);
        // dd($params);
        
     

        call_user_func_array([$controller, $actionName], $params);

        // Aqui eu chamo a função (método) index que está dentro da classe HomeController
        // $controller->index();
        // $controller->$actionName();

       
        
    

    }

}

?>