<?php


include_once("conexao.php");

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);



$result_markers= "UPDATE `hospitais` SET `name`= \"" .$dados['name']."\", `address`=\"".$dados['address']."\", `lat`=\"".$dados['lat']."\", `lng`=\"".$dados['lng']."\", `type`=\"".$dados['type']."\" WHERE `id`=\"".$dados['id']."\"";
    

		


$resultado_markers = mysqli_query($conn, $result_markers);


if(mysqli_insert_id($conn)){
$_SESSION['msg'] = "<span style='color: green';>Endereço atualizado com sucesso!</span>";
header("Location: lista_hospitais.php");
}else{
$_SESSION['msg'] = "<span style='color: red';>Erro: Endereço não foi atualizado com sucesso!</span>";
header("Location: lista_hospitais.php");	
}