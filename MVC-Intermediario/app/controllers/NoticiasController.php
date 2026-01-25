<?php

require_once __DIR__ . '/../core/Controller.php';

class NoticiasController extends Controller{
    public function index()
    {
        //Retorna a view de Noticias
        $this->views('noticias/index');
    }

    public function noticia($idNoticia = null){
        $this->views('noticias/noticia' , ['idNoticia' => $idNoticia]);


    }

}
