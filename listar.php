<?php
	include_once "conexao.php";
	$r = mysqli_query($con,"SELECT * FROM usuario");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Listar</title>
	<style type="text/css">
	body{
		background-image: url(ft3.jpg);
          background-repeat: no-repeat;
          background-size: 100%;
	}
		#box{
			display: none;
			width: 300px;
			height: 200px;
			background-color: red;
			text-align: center;

		}
	</style>
</head>
<body>
	<table border="1px">
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Email</th>
			<th>senha</th>
		</tr>
		<?php while($linhas = mysqli_fetch_assoc($r)){ 
			$id = $linhas['id'];
			$nome = $linhas['nome'];
			$email = $linhas['email'];
			$senha = $linhas['senha'];
		?>
		<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $nome; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $senha; ?></td>
			<td>
				<a href="editar.php?id=<?php echo $id; ?>">Editar</a>
				<a href="excluir.php?id=<?php echo $id; ?>">Excluir</a>
			</td>
		</tr>
	    <?php } ?>
	</table>
 <a href="index.php"><button>voltar</button></a>
</body>
</html>
