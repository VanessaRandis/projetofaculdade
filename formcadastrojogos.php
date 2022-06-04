<?php 
       
        include_once "header.php" 
      
        
?>
<br>

        <h1>Cadastro de Jogos</h1>

     

        <fieldset>
                <legend></legend> <br>
                <form action="jogonovo.php" method="post">
                        <label for="jogo_nome">Nome do jogo: </label>
                        <input type="text" name="jogo_nome" id="jogo_nome"  ><br><br>

                        <label for="jogo_ano">Ano: </label>
                        <input type="text" name="jogo_ano" id="jogo_ano" ><br><br>

                        <label for="jogo_criador">Criador: </label>
                        <input type="text" name="jogo_criador" id="jogo_criador" ><br><br>

                        <label for="jogo_classificacao">Classificação: </label>
                        <input type="text" name="jogo_classificacao" id="jogo_classificacao" ><br><br>

                        <label for="jogo_genero">Genero:</label>
                        <input type="text" name="jogo_genero" id="jogo_genero" ><br><br>
                        
                        <label for="jogo_formato">Formato: </label>
                        <input type="text" name="jogo_formato" id="jogo_formato" ><br><br>

                       
                        <input type="submit" value="Gravar">
                        <button ><a href="listar_filmes.php" >Cancelar</a></button>
                       <br><br>
                </form>

        </fieldset>
       
        


<?php include "footer.php" ?>

   