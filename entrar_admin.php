<?php include_once("conexao.php"); 

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = mysqli_query($conexao, "SELECT * FROM administrador WHERE email = '$email' AND senha = '$senha'");

if( mysqli_num_rows($query) ){
  $admin = mysqli_fetch_array($query);
  session_start();
  session_unset();
  session_destroy();
  
  session_start();
  $_SESSION['admin_id'] = $admin['id'];
  $_SESSION['admin_email'] = $admin['email'];
  $_SESSION['admin_nome'] = $admin['nome'];

  header("location: dashboard.php");
}else{
  header("location: login.php");
}

  
?>


