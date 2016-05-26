
<?php 
	require_once('conexao.php');
 ?>
<html>
<head>
	<title>Deletar</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<h2>Deletar Registro(s)</h2>
	
	<form method= "POST" action="deletar.php">	
		<!--Exibe campos para excluir-->
		<?php
        error_reporting(0);
        ini_set('display_errors', 0);
       
        $conn = mysqli_connect(HOST, USER, SENHA, DATABASE);

         //Exclui ID's com checkbox marcados

         if(isset($_POST['submit']))
        {
        	foreach ($_POST['todelete'] as $delete_id) 
        	{
        		$query = "DELETE FROM `cadastroCRUD` WHERE `id_cadastro` = $delete_id";
        		mysqli_query($conn, $query) or die ('Erro ao enviar comando para o bando');
        		
        	}

        	
        	echo 'Registro(s) removido(s).<br><hr>';
        }

        $query = "SELECT * FROM cadastroCRUD ";
        //comando sql
        $result = mysqli_query($conn, $query);

        //retorno do comando sql no registro procurado em forma de checkbox
        while ($row = mysqli_fetch_array($result)) 
        {
            echo '<input type="checkbox" value="'. $row['id_cadastro'] .'" name="todelete[]">';
            echo $row['nm_cadastro'];
            echo ' '.$row['tel_cadastro'];
            echo '<br>';
        }

       


        mysqli_close($conn);

        ?>
        <hr>
        <input type='submit' value='Deletar' name='submit' class="btn btn-danger">
        <a href="index.php">Voltar para página inicial</a>

        </form>
	</div>
</body>
</html>
