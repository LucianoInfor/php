<?php
	include_once('conexao.php');
	$id = $_GET['id'];
	$imob = mysqli_query($con,"DELETE FROM usuario WHERE id=$id");
	if($imob){
		header('location:listar.php');
	}
?>
