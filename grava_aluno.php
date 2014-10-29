<?php 
  include_once("conexao.php");

  $nome = $_POST["nome"];
  $matricula = $_POST["matricula"];
  $curso_id = $_POST["curso"];
  $senha = $_POST["senha"];

  mysqli_query($conexao, "INSERT INTO aluno (nome, matricula, senha, cursoId) values ('$nome', '$matricula', '$senha', $curso_id)");

  header("location: cadastro_aluno.php");
?>