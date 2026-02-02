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

        $userId1 = $usuario->getUserByid(1);
        $totalUsuarios = $usuario->getUsersCount();

        echo 'Usuario com ID 1:' . $userId1['nome'];
        echo '<br>';
        echo 'Total de usuarios: ' . $totalUsuarios;


        // dd(\config('database'));

        // echo 'Criando novo usuario.. <br>';
        // $usuarioCriado = $usuario->creatUser('Rafael Santos' . rand(1, 1000));
        // echo 'Usuario criando com sucesso, Retorno: '. $usuarioCriado . '<br.<br>';

        // $usuarios = $usuario->getAllUsers();
        // dd($usuarios);
   

        //Retorna a view do home
         $this->views('home/index', $data);        
    }
                // Contato
    public function contact(){
        $this->views('home/contact');
    }
}