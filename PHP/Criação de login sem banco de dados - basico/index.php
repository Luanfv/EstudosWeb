<?php 

	session_start();

	if($_SESSION['logado'] != 'sim')
		include('deslogado.php'); 

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Logado
	</title>

	<style>
		#sair{
			position: relative;
			float: right;
			display: inline;
		}
	</style>
</head>
<body>
	<a href="deslogado.php" id="sair">SAIR</a>
	<h2>Seja bem-vindo, login executado com SUCESSO!</h2>

	<table>

		<form action="post.php">

			<tr>
				<td>
					Titulo
				</td>
			</tr>

			<tr>
				<td>
					<input type="text" name="titulo">
				</td>
			</tr>

			<tr>
				<td>
					Descrição
				</td>
			</tr>
				
			<tr>
				<td>
					<textarea name="descricao" rows="6" cols="30"></textarea>
				</td>
			</tr>
		

			<tr>
				<td>
					<input type="submit" value="Publicar">
				</td>
			</tr>
		</form>
	
	</table>


</body>
</html>
