<?php

    require_once "header.php"

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração de Jogos</title>
</head>
<body>
        <fieldset>
                <legend>Cadastro de Administradores</legend> <br>
                <form action="user_novo.php" method="post">

                        <label for="user_nome">Nome:</label>
                        <input type="text" name="user_nome" id="user_nome" class="mytextbox"><br><br>

                        <label for="user_email">Email:</label>
                        <input type="email" name="user_email" id="user_email" class="mytextbox"><br><br>

                         <label for="user_senha">Senha:</label>
                        <input type="password" name="user_senha" id="user_senha" class="mytextbox"><br><br>


                         
                         <br><br>
                         <button class="mycancelar"><a href="listar_adm.php" >Cancelar</a></button>
                        <input type="submit" value="Gravar" class="mysalvar">

                </form>
                <br><br><br><br>
        </fieldset>
    
</body>
</html>