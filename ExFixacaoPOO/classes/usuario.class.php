<?php

class usuario
{

    use login;


    public function criarUsuario()
    {
        echo 'Usuario criado';
        $this->log('Usuario criado');
    }

    public function deletarUsuario()
    {
        echo 'Usuario deltado';
        $this->log('Usuario Deletado');
    }

}



?>