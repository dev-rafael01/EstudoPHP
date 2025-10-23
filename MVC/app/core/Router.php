<?php



class Router
{

    public function dispatch($url)
    {
        $url = trim($url, '/');
        $partes = $url ? explode('/', $url) : [];
        $controllerName =  $partes[0] ?? 'Home';
        $controllerName = ucfirst($controllerName) . 'Controller';

        echo 'url: ' . var_dump($partes);
        echo '<hr>';
        echo 'controller: ' . $controllerName;

    }

}



?>