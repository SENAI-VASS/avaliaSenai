<?php 
  include_once("conexao.php");

  $nome = $_POST["nome"];
  $codigo = $_POST["codigo"];
  $enc_dia = $_POST["encerramento_dia"];
  $enc_mes = $_POST["encerramento_mes"];
  $enc_ano = $_POST["encerramento_ano"];

  $encerramento = $enc_ano."-".$enc_mes."-".$enc_dia;

  mysqli_query($conexao, "INSERT INTO curso (nome, codigo, encerramento) values ('$nome', '$codigo', '$encerramento')");

  header("location: cadastro_curso.php");
?>