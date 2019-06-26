<?php
  include_once('conexao.php');
  $id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar imobiliaria LB</title>
	<style>
	body{
		background-image: url(ft3.jpg);
          background-repeat: no-repeat;
          background-size: 100%;
	}
	#alte{
		opacity: 0.8;
		width:260px;
		height:400px;
		background-color:green;
		margin-left:40%;
		text-align:center;
	}
	input{
		
		color:blue;
		margin-left:10%;
		padding:4px;
	}
	h2{
		text-align:center;
		font-color:blue;
	}
	h4{
		font-color:white;
	}
	
	</style>
</head>
<body>
	<form method="POST">
	  
	  	 <div id="alte">
	  	 	<h2>Alterar</h2>
	  	 
				<h4>Digite seu nome completo:</h4>
		<input type="text" name="nome" required><br>
				<h4>Degite sua email:</h4>
		<input type="email" name="email" required><br>
		<h4>Degite sua senha:</h4>
		<input type="senha" name="senha" required><br>
		<input type="submit" name="alterar" value="Alterar">
	 	</div>
	  <?php
	  	if(isset($_POST['alterar'])){
	  	  $nome = $_POST['nome'];
	  	  $email = $_POST['email'];

	  	  $senha = $_POST['senha'];
	  	  mysqli_query($con,"UPDATE usuario SET nome='$nome',email='$email',senha='$senha' WHERE id=$id='?' ");
	  	  header('location:listar.php');
	  	}
	  ?>
	</form>
	
</body>
</html>
