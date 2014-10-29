<?php 
  include_once("conexao.php");

  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  mysqli_query($conexao, "INSERT INTO administrador (nome, email, senha) values ('$nome', '$email', '$senha')");

  header("location: cadastro_administrador.php");
?>