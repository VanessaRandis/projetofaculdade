<?php 
include_once "header.php"; 
include_once "database.php";

$jogo_cdcli=$_POST["JOGO_CDCLI"];
$jogo_nome=$_POST["jogo_nome"] ;
$jogo_ano=$_POST["jogo_ano"];
$jogo_criador=$_POST["jogo_criador"];
$jogo_classificacao=$_POST["jogo_classificacao"];
$jogo_genero=$_POST["jogo_genero"];
$jogo_formato=$_POST["jogo_formato"];
                   
//String em SQL
$sql = "UPDATE ads_vanessa_jogos SET 
(jogo_nome='$jogo_nome', jogo_ano='$jogo_ano', jogo_criador='$jogo_criador',
 jogo_classificacao='$jogo_classificacao', jogo_genero='$jogo_genero', jogo_formato='$jogo_formato' where cdcli='$jogo_cdcli'";

echo $sql;
//Realizar o cadastro no banco de dados
if(mysqli_query($conexao, $sql))
{

    header("Location: listar_jogos.php");
}
else
{
    echo "Falha no cadastro de jogos";
}







?> 