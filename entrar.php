<?php include_once("conexao.php"); 

  $maticula = $_POST['matricula'];
  $senha = $_POST['senha'];

  $query = mysqli_query($conexao, "SELECT * FROM aluno");

?>


