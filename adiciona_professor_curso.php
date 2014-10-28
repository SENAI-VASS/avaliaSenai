<?php 

  include_once("conexao.php");

  $prof_id = $_POST["professor"];
  $curso_id = $_POST["curso"];

  $query = mysqli_query($conexao, "INSERT INTO cursoTemProfessor (cursoId, profId) VALUES ($curso_id, $prof_id) ");

  header("location: gerencia_curso.php?id=$curso_id");


?>