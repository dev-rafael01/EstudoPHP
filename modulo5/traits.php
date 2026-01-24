<?php


function meu_autoload($classes)
{
    $diretorios = ['classes/', 'traits/', 'outro_diretorio'];

    foreach($diretorios as $diretorio)
    {
        $diretorio = strtolower($diretorio);
        $classes = strtolower($classes);

        if(file_exists($diretorio . $classes . '.classe.php'))
        {
            include_once($diretorio . $classes . '.classe.php');
            break;
        }
    }
    
}

spl_autoload_register('meu_autoload');







$user = new user();
$user->createUser();
$user->loginUser();
echo '<hr/>';

$file = new file();
$file->created();
$file->deleted();





?>