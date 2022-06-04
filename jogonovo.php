<?php 
include_once "header.php"; 
include_once "database.php";

$jogo_nome=$_POST["jogo_nome"] ;
$jogo_ano=$_POST["jogo_ano"];
$jogo_criador=$_POST["jogo_criador"];
$jogo_classificacao=$_POST["jogo_classificacao"];
$jogo_genero=$_POST["jogo_genero"];
$jogo_formato=$_POST["jogo_formato"];
                   
//String em SQL
$sql = "INSERT INTO ads_vanessa_jogos (jogo_nome, jogo_ano, jogo_criador, jogo_classificacao, jogo_genero, jogo_formato) 
 VALUES ('$jogo_nome', '$jogo_ano', '$jogo_criador','$jogo_classificacao','$jogo_genero','$jogo_formato')";
echo $sql;
//Realizar o cadastro no banco de dados
if(mysqli_query($conexao, $sql))
{

    header("Location: painel.php");
}
else
{
    echo "Falha no cadastro de jogos";
}







?> 