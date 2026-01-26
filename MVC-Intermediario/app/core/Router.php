<?php
    require_once ('../app/controllers/HomeController.php');
    require_once ('../app/controllers/NoticiasController.php');
    require_once ('../app/controllers/HttpErrorController.php');


class Router {
                    //expedição
    public function   dispatch    ($url)
    {
       // Remove as barras "/" do início e do fim da URL
        $url = trim($url, '/');
        // Se existir URL, divide ela em partes usando "/" como separador; senão, cria um array vazio
        $partes = $url ? explode('/', $url) : [];


        // Define o nome do controller com base na primeira parte da URL ou usa "Home" como padrão
        $controllerName = $partes[0] ?? 'Home';
        // Coloca a primeira letra do controller em maiúscula e adiciona o sufixo "Controller"
        $controllerName = ucfirst($controllerName) . 'Controller';
        $actionName = $partes[1] ?? 'index';



         //pagina de erro do 404
         //Verifica se a classe (Controller) existe antes de usá-la.  
         // Evita erro fatal ao instanciar classes inexistentes.
        if(!class_exists($controllerName)){
            $controller =  new HttpErrorController;
            $controller->NotFound();
            return;
        }
        // Aqui eu crio uma instância da classe HomeController
        $controller = new $controllerName();

        //Verifica se o método existe dentro do Controller.
        if(!method_exists($controller, $actionName)){
            $controller =  new HttpErrorController;
            $controller->NotFound();
            return;
        }

        $params = array_slice($partes, 2);

        call_user_func_array([$controller, $actionName], $params);

        // Aqui eu chamo a função (método) index que está dentro da classe HomeController
        // $controller->index();
        $controller->$actionName();

       
        
    

    }

}

?>