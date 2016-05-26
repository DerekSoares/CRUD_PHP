<html>
<head>
	<title>Crud PHP</title>
	<meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">

	<h2>Cadastrar Informações</h2>
	<!--form que envia os dados para novo cadastro no cadastrar.php-->
	<form method= "POST" action="cadastrar.php">
		<label>Nome:</label>
		<input type="text" class="form-control"name="nome" value=""><br/>

		<label>Telefone:</label>
		<input type="text" class="form-control"name="telefone" value=""><br/>
		<input type="submit" name="enviar" value="Cadastrar" class="btn btn-primary">
	</form>
	
		<!-- Include exibe a tabela-->
		<?php include 'tabela.php';?>
</div>
</body>
</html>
