<?php
   
    include_once "head.php";
    include_once "database.php";
   
    $sql = "SELECT * FROM ads_vanessa_adm";
   
    $resultado = mysqli_query($conexao, $sql);
    
    

?>
<button><a href="painel.php" >Painel</a></button>
<button><a href="cadastroadm.php" >Novo Usuario</a></button>
<button><a href="logout.php" >Sair</a></button>


    <h1>Lista de Usuarios</h1>
    <table border="1" width="50%" bordercolor="#008000">
        <thead> 
            <tr>
                <th>Nome:</th>
                <th>Email:</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php while($dados = mysqli_fetch_array($resultado)):?>
            <?php  $id=$dados[0]?>
            <tr>
                <td><?php echo $dados['nome']?></td>
                <td><?php echo $dados['email']?></td>
                <td><a href="adm_excluir.php?codigo=<?php echo $id?>">Excluir</a></td>
               
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>