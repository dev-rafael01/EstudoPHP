
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <form method="POST" action="login.php">
     <label for="username">Usuario</label>   
     <input type="text" name="usuario"><br>

     <label for="password">Senha</label>
     <input type="password" name="password"><br>

     <label for="lembrar">Tema Preferido</label>
        <select name="tema">
            <option value="escuro">Escuro</option>
            <option value="claro">Claro</option>
        </select>  <br>
        <input type="submit" value="login">   

    </form>
</body>

</html>