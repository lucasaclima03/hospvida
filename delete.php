<?php   



require_once 'conexao.php';
require_once 'includes/mensagem.php';

if(isset($_GET['id'])){



 $id = mysqli_escape_string($conn,$_GET['id']);

 $sql = "DELETE FROM hospitais WHERE id='$id'";
}

if(mysqli_query($conn, $sql)){


    $_SESSION['mensagem'] = "Deletado com sucesso!";
    header('Location: lista_hospitais.php');
} else {
    $_SESSION['mensagem']="Erro ao Deletar";
    header('Location: lista_hospitais.php');
}





?>