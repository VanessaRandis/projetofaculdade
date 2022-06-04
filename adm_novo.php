<?php 
include_once "header.php"; 
include_once "database.php";

$nome=$_POST["nome"] ;
$email=$_POST["email"];
$senha=$_POST["senha"];

        
//String em SQL
$sql = "INSERT INTO ads_vanessa_adm (nome,email,senha) 
VALUES ('$nome','$email','$senha')";
echo $sql;
//Realizar o cadastro no banco de dados
if(mysqli_query($conexao, $sql))
{
    header("Location: painel.php");
}
else
{
    echo "Falha no cadastro do adm";
}

?>