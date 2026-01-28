<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Usuario;




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