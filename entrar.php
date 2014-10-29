<?php include_once("conexao.php"); 

$matricula = $_POST['matricula'];
$senha = $_POST['senha'];

$query = mysqli_query($conexao, "SELECT * FROM aluno WHERE matricula = '$matricula' AND senha = '$senha'");

if( mysqli_num_rows($query) ){
  $aluno = mysqli_fetch_array($query);
  session_start();
  session_unset();
  session_destroy();

  session_start();
  $_SESSION['aluno_id'] = $aluno['id'];
  $_SESSION['curso_id'] = $aluno['cursoId'];
  $_SESSION['aluno_nome'] = $aluno['nome'];

  header("location: index.php");
}else{
  header("location: login.php");
}

?>


