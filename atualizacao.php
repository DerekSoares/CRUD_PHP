<?php

require_once('conexao.php');

$id = $_POST['id'];
$user = $_POST['nome'];
$telefone = $_POST['telefone'];

//verifica se o ID esta vazio
if (isset($_POST['submit'])) {

	$conn = mysqli_connect(HOST, USER, SENHA, DATABASE) or die(mysqli_error());
    
    $query = "UPDATE `cadastroCRUD` SET `nm_cadastro` = '$user', `tel_cadastro` = '$telefone' WHERE `cadastroCRUD`.`id_cadastro` = $id";
    mysqli_query($conn, $query) or die(mysqli_error());

    mysqli_close($conn);
    echo"
	<script>
	alert('Atualizado com sucesso');
	window.location='index.php'; 
	</script>
	";
    echo "$id";
} else {

    //erro e script para voltar ao index
    echo"
	<script>
	alert('ERRO DURANTE ATUALIZAÇÃO');
	window.location='index.php'; 
	</script>
	";
}
