<?php

session_start();

if(empty($_SESSION['usuario'])){
    header('location: index.php');
    exit();
}


$cor = '#f50505ff';
if(!empty($_COOKIE['tema'])){
    $tema = $_COOKIE['tema'];

    if($tema == 'escuro'){
        $cor = '#333333ff';
    }else{
        $cor = '#ffffffff';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina secreta </title>
</head>
<body style="background-color:<?= $cor ?>;">


    
</body>
</html>



<?php
echo "BEM-VINDO, " . $_SESSION['usuario'];
echo "<br/>";
echo '<a href="logout.php">SAIR<a/> ';

/**
 * Deve exibir "Bem vindo [LOGIN DO USUARIO] se ele estiver logado
 * deve ter opção de sair
 */
?>