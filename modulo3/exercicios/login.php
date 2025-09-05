<?php


 //header() --> envia  um cabeçalho html
session_start();

if(!empty($_POST['usuario']) && !empty($_POST['password'])){
    
$usuario = htmlspecialchars($_POST['usuario']);
$senha = htmlspecialchars($_POST['password']);


    if($usuario === 'admin' && $senha === 'admin'){
       $_SESSION['usuario'] = $usuario;
       if(!empty($_POST['tema'])){
        setcookie('tema', htmlspecialchars($_POST['tema']));
       }
       
        header('location: welcome.php');
    }else{
        echo "USUARIO OU SENHA INVÁLIDOS";
        echo '<br/>';
        echo '<a href="index.php"> TENTAR NOVAMENTE <a/>';
    }

}else{
    echo 'PREENCHA TODOS OS DADOS';
    echo "<br/>";
    echo "<a href='index.php'> VOLTAR <a/>" ;
}

?>