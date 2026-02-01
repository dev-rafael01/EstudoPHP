<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Usuario;
use App\Core\Database;




class HomeController extends Controller{
    public function index()
    {

    $usuario = new Usuario();
    $data = $usuario->getUserData();

    $database = new Database();
    // $database->connect();
    $consulta = $database->query('SELECT 1+1 AS teste');
    dd($consulta->fetch());

        //Retorna a view do home
         $this->views('home/index', $data);        
    }
                // Contato
    public function contact(){
        $this->views('home/contact');
    }
}