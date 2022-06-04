<?php 
        //Inclusão de página com o conteúdo do cabeçalho
        include_once "head.php" ;
        include_once "database.php" ;
        /*
            Forma de comentário em bloco
        */
        $cdcli=$_GET['cdcli'];
        $sql = "DELETE FROM ads_vanessa_jogos where cdcli='$cdcli'";
        // Realiza a conexão  com o banco de dados e executar o comando em SQL armazendano o resultado em uma variável
        
        if(mysqli_query($conexao, $sql))
{
    //echo $sql;
    header("Location: listar_jogos.php");
}
else
{
    echo "Falha no cadastro de jogos";
}
?>
<br>
