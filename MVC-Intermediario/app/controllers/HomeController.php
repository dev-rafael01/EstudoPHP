<?php

namespace app\Controllers;

use App\Core\Controller;
use App\Models\Usuario;

// require_once __DIR__ . '/../core/Controller.php';
// require_once __DIR__ . '/../models/Usuario.php';


class HomeController extends Controller{
    public function index()
    {

    $usuario = new Usuario();
    $data = $usuario->getUserData();

        //Retorna a view do home
         $this->views('home/index', $data);        
    }
                // Contato
    public function contact(){
        $this->views('home/contact');
    }
}