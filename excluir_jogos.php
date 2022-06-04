<?php 
      
        include_once "header.php" ;
        include_once "database.php" ;
        
        $cdcli=$_GET['cdcli'];
        $sql = "DELETE FROM ads_vanessa_jogos where cdcli='$cdcli'";
        
        
        if(mysqli_query($conexao, $sql))
{
    
    header("Location: listar_jogos.php");
}
else
{
    echo "Falha no cadastro de jogos";
}
?>
<br>