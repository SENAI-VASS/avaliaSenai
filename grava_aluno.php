<?php 
  include_once("conexao.php");

  $nome = $_POST["nome"];
  $matricula = $_POST["matricula"];
  $curso_id = $_POST["curso"];

  mysqli_query($conexao, "INSERT INTO aluno (nome, matricula, cursoId) values ('$nome', '$matricula', $curso_id)");

  header("location: cadastro_aluno.php");
?>