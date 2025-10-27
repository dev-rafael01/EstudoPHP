<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/usuario.php';

class HomeController  extends Controller
{
   public function index()
   {
     $usuario = new Usuario();
     $data = $usuario->getUserData();

     //retornando pro home
     $this->view('home/index', $data);
   }
}

?>