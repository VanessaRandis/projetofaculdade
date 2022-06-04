?php
   
   include_once "database.php";
?>
<button><a href="painel.php" >Painel</a></button>

<button><a href="cadastro_cliente.php" >Novo Cliente</a></button>



<button><a href="logout.php" >Sair</a></button>

    <h3>Lista de Clientes</h3>
    
    <table border="1" width="50%" bordercolor="#008000">
        <thead> 
            <tr>
                <th></th>
               
               <?php 
                  if ($verifique_adm=="on") 
                     { 
                     echo ("<th></th>");
                     }

                    ?>

            </tr>
        </thead>
        <tbody>
        <?php while($dados = mysqli_fetch_array($resultado)):?>
            <tr>
                 <?php  $id=$dados[0]?>
                <td><?php echo $dados['nome']?></td>
                <td><a href="cadastro_cliente_exibir.php?cdcli=<?php echo $id?>">Exibir</a></td>
                
                
                <td>
                     <?php if ($verifique_adm=="on") 
                     { 
                         echo "<a href=excluir_jogos.php?cdcli=$id>Excluir</a>";
                     }

                    ?>
                
                
                </td>
                
                
                
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>