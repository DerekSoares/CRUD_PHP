<html>
<head>
	<title>Atualizar</title>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        
        <h2>Atualizar Registro</h2>
	<!-- form que envia dados para este php procurar o registro-->
	<form method= "POST" action="atualiza.php">
            <label>Pesquisar por ID:</label>
		<input type="text" name="id" value=""><br/>
                <button type="submit" name="enviar" class="btn btn-primary" >Pesquisar</button><br>
                <hr>
         </form>
	
	
		<!-- PHP que procura o registro e exibe campos para alterações-->
		<?php
		error_reporting(0);
		ini_set('display_errors', 0);
		require_once('conexao.php');

		$id = $_POST['id'];
                
                $conn = mysqli_connect(HOST,USER,SENHA,DATABASE);
        //comando sql
                $query =  "SELECT * FROM cadastroCRUD WHERE id_cadastro = '$id' "; 
		$result = mysqli_query($conn, $query);
        //retorno do comando sql no registro procurado
                
		while ($row = mysqli_fetch_array($result)) {
        //form criadoo em php que envia os dados para o atualizacao.php processar a atualização
			echo'REGISTRO ID: '.$id."<br/>	
			<form method='POST' action='atualizacao.php'  class='form-inline'>

			<input type='text' name='id' value='".$row['id_cadastro']."' readonly ><br/>
			<input type='text' name='nome' placeholder='Nome'value='".$row['nm_cadastro']."'><br/>
			<input type='text' name='telefone' placeholder='Telefone'value='".$row['tel_cadastro']."'><br/>
			<input type='submit' value='Atualizar' name='submit' class='btn btn-success'>

			</form>
			";
		}
                
                mysqli_close($conn);
		?>
               
	</div>
</body>
</html>
