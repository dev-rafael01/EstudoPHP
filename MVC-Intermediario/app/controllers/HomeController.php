<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Usuario.php';


class HomeController extends Controller{
    public function index()
    {

    $usuario = new Usuario();
    $data = $usuario->getUserData();

        //Retorna a view do home
         $this->views('home/index', $data);

         
    }
}