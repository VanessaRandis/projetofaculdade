<!DOCTYPE html>
<html>
<head>
    <title>Painel</title>
    <meta charset="utf-8">
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>

<?php
 if(!isset($_SESSION)) { session_start(); } 

include('verifica_login.php');
include('header.php');
$verifique_adm=$_SESSION['login_adm'];
//echo ("<button><a href=listar_user.php >Usuarios</a></button>");
 
?>

<div id="container-imagem">
<h1 class="mylabel">Bem vindo!, <?php echo $_SESSION['usuario'];?> </h1>
<button class="mymenu" ><a href="listar_jogos.php" >JOGOS</a></button>
<?php if ($verifique_adm=="on")
{
      echo ("<button class=mymenu><a href=listar_adm.php >Usuarios</a></button>");
}
?>


<button class="mymenu" ><a href="logout.php" >Sair</a></button>



<h2>
</div>
</body>
</html>