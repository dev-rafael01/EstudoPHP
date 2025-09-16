<?php

trait logger
{
    public function log($mensagem)
    {
        echo '<br/> [LOG]: '. $mensagem . '<br/>';
        echo 'Data: ' . date('d-m-y') . '<br/>';
    }
}

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
class file
{

    use logger;

    public function created()
    {
        echo 'Arquirvo criado';
        $this->log('Arquirvo criado');
    }

    public function deleted()
    {
        echo 'Arquivo deletado';
        $this->log('Arquivo deletado');
    }
}

$user = new user();
$user->createUser();
$user->loginUser();
echo '<hr/>';

$file = new file();
$file->created();
$file->deleted();





?>