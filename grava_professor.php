<?php
	include_once("conexao.php");

	$nome = $_POST["nome"];

	mysqli_query($conexao, "INSERT INTO professor (nome) values ('$nome')");

	header("location: cadastro_professor.php");
?>