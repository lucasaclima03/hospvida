<?php

//Conexão
include_once 'conexao.php';
//header
include_once 'includes/header.php';
//mensagem
include_once 'includes/mensagem.php';
?>



<div class="row">
    <div class = "col s12 m6 push-m3">
        <h3 class="light">Hospitais</h3>
        <table class = "stripped">
            <thead>
                <th>Nome do Hospital</th>
                <th>Endereço</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Tipo</th>
                
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM hospitais";
                $resultado = mysqli_query($conn, $sql);
                while ($dados=mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['name'];?></td>
                    <td><?php echo $dados['address'];?></td>
                    <td><?php echo $dados['lat'];?></td>
                    <td><?php echo $dados['lng'];?></td>
                    <td><?php echo $dados['type'];?></td>
                    <td> <a href="editar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edit</i></i></a></td>
                    
                    <td> <a href="delete.php?id= <?php echo $dados['id'];?>" name="btn-deleta" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                    
                    
                    <!-- Modal Structure -->
                    <div id="<?php echo $dados['id'];?>" class="modal">
                    <form action="delete.php" method="POST" name="deletar">
                            <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                            <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>

                            </form>
                        
                        
                    </div>

                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br>
        <a href="cadastrar.php" class="btn">Cadastrar outro Hospital</a>
        <a href="index.php" class="btn">Voltar à pagina inicial</a>
    </div>
</div>





<?php
//footer
include_once 'includes/footer.php';
?>