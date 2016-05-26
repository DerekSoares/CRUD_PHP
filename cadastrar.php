<?php
    require_once ('conexao.php');

$user     = $_POST['nome'];
$telefone = $_POST['telefone'];

//verifica se campos estao vazios
if (!empty($user) || !empty($telefone)) 
{
    $conn = mysqli_connect(HOST, USER, SENHA, DATABASE);


    $query = "INSERT INTO cadastroCRUD(nm_cadastro,tel_cadastro) VALUES('$user','$telefone')";
    $sql = mysqli_query($conn, $query);
    
    if($sql)
    {
    	echo 'Cadastrado com sucesso!';	
    }
    else
    {
    	echo 'Erro no cadastro!';	
    }
    
    mysqli_close($conn);
} 
else
{
    //erro
    echo 'Preencha todos os campos!';
}

?>
<!-- voltar ao index -->
<br>
<a href="index.php">&lt;&lt; Voltar a pagina Inicial</a>

