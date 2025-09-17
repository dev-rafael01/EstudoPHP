<?php

class user
{

    use logger;

    public function createUser()
    {
        echo 'Usuario criado ';
        $this->log('Usuario criado');
    }

    public function loginUser()
    {
        echo 'Usuario Logado';
        $this->log('Usuario Logado');
    }
}


?>