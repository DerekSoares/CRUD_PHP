<?php
require_once ('conexao.php');
//tabela exibida no index

	$conn = mysqli_connect(HOST,USER,SENHA,DATABASE);
	$query = "SELECT * FROM cadastroCRUD "; //query isolada dentro da variável

	 $result = mysqli_query($conn, $query);

		echo '<table class="table">
		<thead>
		<tr>
		<th>ID</th>
		<th>Nomes</th>
		<th>Telefones</th>

		</tr>
		</thead>';

//retorno do sql em forma de lista
		while ($row = mysqli_fetch_array($result)) 
		{
		    echo '<tr><td>'.$row['id_cadastro'].'</td><td>'.
		    $row['nm_cadastro'].'</td><td>'.
		    $row['tel_cadastro'].'</td></tr>';
		}

	mysqli_close($conn);
echo '</table>';
		
		//Links de Atualizar e Deletar
		echo '<table>';
		echo '<tr><td><a href="atualiza.php" class="btn btn-success">Atualizar Registro</td>';
		echo '<td><a href="deletar.php" class="btn btn-danger">Deletar Registro</td></tr>';
		echo '</table>';

?>

<div class="container">
	
</div>
