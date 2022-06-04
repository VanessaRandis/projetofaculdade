<?php 
        //Inclusão de página com o conteúdo do cabeçalho
        include_once "header.php" ;
        include_once "database.php" ;
        /*
            Forma de comentário em bloco
        */
        $codigo=$_GET['codigo'];
        $sql = "DELETE FROM ads_vanessa_adm where codigo='$codigo'";
        // Realiza a conexão  com o banco de dados e executar o comando em SQL armazendano o resultado em uma variável
        
        if(mysqli_query($conexao, $sql))
{
    //echo $sql;
    header("Location: listar_adm.php");
}
else
{
    echo "Falha na exclusão de administrador.";
}
?>
<br>